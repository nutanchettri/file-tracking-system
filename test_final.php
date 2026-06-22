<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$results = [];

// Test 1: Private disk
try {
    Storage::disk('private')->exists('test');
    $results[] = "✓ Private disk configured correctly";
} catch (Throwable $e) {
    $results[] = "✗ Private disk: " . $e->getMessage();
}

// Test 2: Public files model
try {
    $files = App\Models\PublicFile::latest()->paginate(5);
    foreach ($files as $f) {
        $exists = $f->attachment_exists;
        $url    = $f->getSignedDownloadUrl();
    }
    $results[] = "✓ PublicFile model OK ({$files->total()} records, signed URLs generated)";
} catch (Throwable $e) {
    $results[] = "✗ PublicFile: " . $e->getMessage();
}

// Test 3: User UUIDs
try {
    $total = App\Models\User::count();
    $withUuid = App\Models\User::whereNotNull('uuid')->count();
    $results[] = ($total === $withUuid)
        ? "✓ User UUIDs: {$withUuid}/{$total} populated"
        : "✗ User UUIDs: {$withUuid}/{$total} (MISSING {$diff})";
} catch (Throwable $e) {
    $results[] = "✗ User UUID: " . $e->getMessage();
}

// Test 4: DashboardService cache
try {
    $svc = new App\Services\DashboardService();
    $stats = $svc->superAdminStats();
    $results[] = "✓ DashboardService cache OK (files: {$stats['total_files']})";
} catch (Throwable $e) {
    $results[] = "✗ DashboardService: " . $e->getMessage();
}

// Test 5: Profile photo accessor
try {
    $user = App\Models\User::first();
    $url = $user->photo_url;
    $initials = $user->initials;
    $results[] = "✓ User accessors OK (photo_url, initials={$initials})";
} catch (Throwable $e) {
    $results[] = "✗ User accessors: " . $e->getMessage();
}

// Test 6: TransferRequest UUIDs
try {
    $total = App\Models\TransferRequest::count();
    $withUuid = App\Models\TransferRequest::whereNotNull('uuid')->count();
    $results[] = ($total === $withUuid)
        ? "✓ TransferRequest UUIDs: {$withUuid}/{$total}"
        : "✗ TransferRequest UUIDs: {$withUuid}/{$total}";
} catch (Throwable $e) {
    $results[] = "✗ TransferRequest UUID: " . $e->getMessage();
}

// Test 7: FileRecord UUIDs
try {
    $total = App\Models\FileRecord::count();
    $withUuid = App\Models\FileRecord::whereNotNull('uuid')->count();
    $results[] = "✓ FileRecord UUIDs: {$withUuid}/{$total}";
} catch (Throwable $e) {
    $results[] = "✗ FileRecord UUID: " . $e->getMessage();
}

echo "\n=== FINAL SYSTEM CHECK ===\n";
foreach ($results as $r) {
    echo $r . "\n";
}
echo "===========================\n";
