<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Secure digital File Tracking & Department Management System with role-based access, transfer approvals, and public document submission.">
    <title>File Tracking & Department Management System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS Animation Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ============================================================
   FILE TRACKING & DEPARTMENT MANAGEMENT SYSTEM
   Landing Page Stylesheet
   ============================================================ */

        :root {
            /* Dark Blue + White + Cyan palette */
            --fts-navy-950: #060f24;
            --fts-navy-900: #0a1a36;
            --fts-navy-800: #0f2348;
            --fts-blue-700: #123a72;
            --fts-blue-600: #1657a8;
            --fts-blue-500: #1d72d8;
            --fts-cyan-500: #17b8d6;
            --fts-cyan-400: #2dd4e8;
            --fts-cyan-100: #e3fbff;
            --fts-blue-100: #e8f1fc;
            --fts-gray-900: #131c2b;
            --fts-gray-700: #4b566a;
            --fts-gray-500: #6c7888;
            --fts-gray-200: #e4e8f0;
            --fts-gray-100: #f4f7fb;
            --fts-white: #ffffff;

            --fts-radius: 16px;
            --fts-radius-sm: 10px;
            --fts-shadow-sm: 0 2px 10px rgba(10, 26, 54, 0.06);
            --fts-shadow-md: 0 12px 32px rgba(10, 26, 54, 0.12);
            --fts-shadow-lg: 0 24px 60px rgba(10, 26, 54, 0.18);
            --fts-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);

            --font-heading: 'Sora', 'Inter', sans-serif;
            --font-body: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            color: var(--fts-gray-900);
            background-color: var(--fts-white);
            line-height: 1.7;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--font-heading);
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        .section-padding {
            padding: 100px 0;
        }

        @media (max-width: 768px) {
            .section-padding {
                padding: 64px 0;
            }
        }

        .bg-light-soft {
            background-color: var(--fts-gray-100);
        }

        .text-white-soft {
            color: rgba(255, 255, 255, 0.75) !important;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--fts-blue-600);
            background: var(--fts-blue-100);
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 18px;
        }

        .eyebrow-cyan {
            color: var(--fts-cyan-500);
            background: var(--fts-cyan-100);
        }

        .section-title {
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            color: var(--fts-navy-900);
            margin-bottom: 16px;
        }

        .section-subtitle {
            color: var(--fts-gray-500);
            max-width: 680px;
            margin: 0 auto;
            font-size: 1.05rem;
        }

        .section-subtitle-left {
            color: var(--fts-gray-500);
            font-size: 1.02rem;
            margin-bottom: 24px;
        }

        .check-list {
            list-style: none;
            padding: 0;
            margin-bottom: 0;
        }

        .check-list li {
            font-size: 0.95rem;
            color: var(--fts-gray-700);
            margin-bottom: 12px;
            font-weight: 500;
        }

        .check-list li i {
            color: var(--fts-cyan-500);
            margin-right: 10px;
        }

        /* ===== Focus visibility for accessibility ===== */
        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        textarea:focus-visible,
        select:focus-visible {
            outline: 2px solid var(--fts-cyan-500);
            outline-offset: 2px;
        }

        /* ===== BUTTONS ===== */
        .btn-fts-primary {
            background: linear-gradient(135deg, var(--fts-blue-600), var(--fts-blue-700));
            color: #fff;
            border: none;
            padding: 11px 28px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: var(--fts-shadow-sm);
            transition: var(--fts-transition);
            display: inline-flex;
            align-items: center;
        }

        .btn-fts-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--fts-shadow-md);
            color: #fff;
        }

        .btn-fts-cyan {
            background: linear-gradient(135deg, var(--fts-cyan-500), var(--fts-cyan-400));
            color: #06303a;
            border: none;
            padding: 11px 28px;
            border-radius: 50px;
            font-weight: 700;
            box-shadow: 0 10px 26px rgba(23, 184, 214, 0.35);
            transition: var(--fts-transition);
            display: inline-flex;
            align-items: center;
        }

        .btn-fts-cyan:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 32px rgba(23, 184, 214, 0.45);
            color: #06303a;
        }

        .btn-fts-outline {
            border: 1.5px solid var(--fts-gray-200);
            color: var(--fts-navy-900);
            padding: 10px 26px;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--fts-transition);
            background: #fff;
            display: inline-flex;
            align-items: center;
        }

        .btn-fts-outline:hover {
            border-color: var(--fts-cyan-500);
            color: var(--fts-cyan-500);
            transform: translateY(-2px);
        }

        .btn-fts-light {
            background: rgba(255, 255, 255, 0.14);
            border: 1.5px solid rgba(255, 255, 255, 0.35);
            color: #fff;
            padding: 11px 28px;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--fts-transition);
            display: inline-flex;
            align-items: center;
            backdrop-filter: blur(6px);
        }

        .btn-fts-light:hover {
            background: rgba(255, 255, 255, 0.24);
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-fts-ghost {
            color: #fff;
            border: 1.5px dashed rgba(255, 255, 255, 0.4);
            padding: 11px 28px;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--fts-transition);
            display: inline-flex;
            align-items: center;
        }

        .btn-fts-ghost:hover {
            border-color: var(--fts-cyan-400);
            color: var(--fts-cyan-400);
        }

        section#cta .btn-fts-ghost,
        section#submit .btn-fts-ghost {
            color: var(--fts-navy-900);
            border-color: var(--fts-gray-200);
        }

        /* ============================================================
   NAVBAR
   ============================================================ */
        .navbar-fts {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            box-shadow: 0 1px 0 rgba(10, 26, 54, 0.06);
            transition: var(--fts-transition);
            padding: 14px 0;
            z-index: 1050;
        }

        .navbar-fts.scrolled {
            box-shadow: var(--fts-shadow-sm);
            padding: 10px 0;
        }

        .navbar-brand-fts {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--fts-navy-900) !important;
            font-family: var(--font-heading);
            line-height: 1.2;
        }

        .navbar-brand-fts .brand-sub {
            font-size: 0.62rem;
            font-weight: 500;
            color: var(--fts-gray-500);
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .navbar-brand-fts .brand-icon {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            background: linear-gradient(135deg, var(--fts-cyan-500), var(--fts-blue-700));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.15rem;
            box-shadow: var(--fts-shadow-sm);
            flex-shrink: 0;
        }

        .navbar-fts .nav-link {
            font-weight: 500;
            color: var(--fts-gray-700) !important;
            padding: 8px 16px !important;
            border-radius: 8px;
            transition: var(--fts-transition);
            font-size: 0.94rem;
        }

        .navbar-fts .nav-link:hover {
            color: var(--fts-blue-600) !important;
            background: var(--fts-blue-100);
        }

        /* ============================================================
   HERO SECTION
   ============================================================ */
        .hero-section {
            background:
                radial-gradient(circle at 12% 18%, rgba(23, 184, 214, 0.22), transparent 45%),
                radial-gradient(circle at 88% 78%, rgba(29, 114, 216, 0.25), transparent 50%),
                linear-gradient(150deg, var(--fts-navy-950) 0%, var(--fts-navy-900) 45%, var(--fts-blue-700) 100%);
            padding: 165px 0 130px;
            position: relative;
            overflow: hidden;
            color: #fff;
            background-size: 200% 200%;
            animation: gradientShift 16s ease infinite;
        }

        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }
        }

        .hero-bg-grid {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
            background-size: 42px 42px;
            pointer-events: none;
        }

        .floating-doc {
            position: absolute;
            color: rgba(255, 255, 255, 0.10);
            font-size: 4rem;
            animation: floatDoc 8s ease-in-out infinite;
            pointer-events: none;
        }

        .floating-doc.doc-1 {
            top: 14%;
            left: 6%;
            animation-delay: 0s;
            font-size: 3.2rem;
        }

        .floating-doc.doc-2 {
            top: 65%;
            left: 12%;
            animation-delay: 1.5s;
            font-size: 2.4rem;
        }

        .floating-doc.doc-3 {
            top: 22%;
            right: 8%;
            animation-delay: 0.8s;
            font-size: 3.6rem;
        }

        .floating-doc.doc-4 {
            top: 70%;
            right: 14%;
            animation-delay: 2.2s;
            font-size: 2.8rem;
        }

        @keyframes floatDoc {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-18px) rotate(4deg);
            }
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.10);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 0.82rem;
            font-weight: 600;
            margin-bottom: 26px;
            backdrop-filter: blur(8px);
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--fts-cyan-400);
            box-shadow: 0 0 0 0 rgba(45, 212, 232, 0.6);
            animation: pulseDot 1.8s infinite;
        }

        @keyframes pulseDot {
            0% {
                box-shadow: 0 0 0 0 rgba(45, 212, 232, 0.6);
            }

            70% {
                box-shadow: 0 0 0 8px rgba(45, 212, 232, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(45, 212, 232, 0);
            }
        }

        .hero-section h1 {
            font-size: clamp(2.1rem, 4.4vw, 3.5rem);
            font-weight: 800;
            line-height: 1.18;
            margin-bottom: 22px;
        }

        .hero-section .lead {
            font-size: clamp(1rem, 1.3vw, 1.18rem);
            color: rgba(255, 255, 255, 0.82);
            max-width: 540px;
            margin-bottom: 36px;
        }

        .hero-stats-mini {
            display: flex;
            gap: 28px;
            margin-top: 48px;
            flex-wrap: wrap;
        }

        .hero-stats-mini div h3 {
            font-size: 1.7rem;
            font-weight: 800;
            margin-bottom: 0;
            color: #fff;
        }

        .hero-stats-mini div span {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.65);
        }

        /* ===== Hero Pipeline Card (Glassmorphism) ===== */
        .hero-pipeline-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-radius: 22px;
            padding: 26px;
            box-shadow: var(--fts-shadow-lg);
        }

        .pipeline-header {
            display: flex;
            align-items: center;
            gap: 6px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            margin-bottom: 22px;
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.65);
        }

        .mock-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .pipeline-track {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .pipeline-node {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            color: rgba(255, 255, 255, 0.45);
            min-width: 56px;
        }

        .pipeline-node i {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .pipeline-node span {
            font-size: 0.65rem;
            font-weight: 600;
            white-space: nowrap;
        }

        .pipeline-node.done {
            color: var(--fts-cyan-400);
        }

        .pipeline-node.done i {
            background: rgba(45, 212, 232, 0.18);
            border-color: var(--fts-cyan-400);
            color: var(--fts-cyan-400);
        }

        .pipeline-node.active {
            color: #fff;
        }

        .pipeline-node.active i {
            background: var(--fts-cyan-500);
            border-color: var(--fts-cyan-400);
            color: #06303a;
            box-shadow: 0 0 0 6px rgba(45, 212, 232, 0.18);
        }

        .pipeline-line {
            flex: 1;
            height: 2px;
            background: rgba(255, 255, 255, 0.15);
            min-width: 14px;
        }

        .pipeline-line.done,
        .pipeline-line.active {
            background: var(--fts-cyan-400);
        }

        .pipeline-status-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .status-chip {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.78rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 50px;
        }

        .status-progress {
            background: rgba(45, 212, 232, 0.18);
            color: var(--fts-cyan-400);
        }

        .status-id {
            background: rgba(255, 255, 255, 0.10);
            color: rgba(255, 255, 255, 0.75);
            font-family: monospace;
        }

        .glass-mini-row {
            display: flex;
            gap: 10px;
        }

        .glass-mini {
            flex: 1;
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 12px;
            text-align: center;
        }

        .glass-mini strong {
            display: block;
            color: #fff;
            font-size: 1.1rem;
        }

        .glass-mini span {
            font-size: 0.66rem;
            color: rgba(255, 255, 255, 0.6);
        }

        /* ============================================================
   FADE-IN HELPERS (used as fallback alongside AOS)
   ============================================================ */
        [data-aos] {
            will-change: transform, opacity;
        }

        /* ============================================================
   PUBLIC SUBMISSION PORTAL
   ============================================================ */
        .public-submit-section {
            background: linear-gradient(180deg, #fff 0%, var(--fts-blue-100) 100%);
        }

        .upload-card {
            background: #fff;
            border-radius: 22px;
            padding: 34px;
            box-shadow: var(--fts-shadow-lg);
            border: 1px solid var(--fts-gray-200);
        }

        .form-label-fts {
            font-size: 0.84rem;
            font-weight: 600;
            color: var(--fts-navy-900);
            margin-bottom: 6px;
            display: block;
        }

        .form-control-fts {
            border: 1.5px solid var(--fts-gray-200);
            border-radius: var(--fts-radius-sm);
            padding: 11px 14px;
            font-size: 0.92rem;
            transition: var(--fts-transition);
            background: var(--fts-gray-100);
        }

        .form-control-fts:focus {
            border-color: var(--fts-cyan-500);
            box-shadow: 0 0 0 3px rgba(23, 184, 214, 0.15);
            background: #fff;
        }

        .dropzone {
            border: 2px dashed var(--fts-gray-200);
            border-radius: var(--fts-radius);
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: var(--fts-transition);
            background: var(--fts-gray-100);
        }

        .dropzone:hover,
        .dropzone.drag-active {
            border-color: var(--fts-cyan-500);
            background: var(--fts-cyan-100);
        }

        .cloud-upload-icon {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin: 0 auto 14px;
            transition: var(--fts-transition);
        }

        .dropzone:hover .cloud-upload-icon {
            transform: translateY(-4px);
        }

        .dropzone-hint {
            font-size: 0.78rem;
            color: var(--fts-gray-500);
        }

        .dropzone-content p {
            color: var(--fts-gray-700);
            font-size: 0.92rem;
        }

        .success-confirmation {
            margin-top: 22px;
            background: #effaf3;
            border: 1px solid #b9e8c7;
            border-radius: var(--fts-radius-sm);
            padding: 16px 18px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .success-confirmation i {
            color: #2a9d5c;
            font-size: 1.6rem;
            margin-top: 2px;
        }

        .success-confirmation strong {
            color: #1c5c36;
            font-size: 0.95rem;
        }

        .success-confirmation p {
            color: #2a6b46;
            font-size: 0.88rem;
        }

        .tracking-number-pill {
            display: inline-block;
            background: #fff;
            border: 1px solid #b9e8c7;
            border-radius: 50px;
            padding: 2px 12px;
            font-family: monospace;
            font-weight: 700;
            color: #1c5c36;
        }

        /* ============================================================
   FILE TRACKING SECTION
   ============================================================ */
        .track-search-card {
            background: #fff;
            border-radius: 50px;
            box-shadow: var(--fts-shadow-md);
            padding: 8px;
            border: 1px solid var(--fts-gray-200);
        }

        .track-search-form {
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
        }

        .track-search-form .input-icon {
            position: absolute;
            left: 22px;
            color: var(--fts-gray-500);
            font-size: 0.9rem;
        }

        .track-input {
            border: none !important;
            background: transparent !important;
            padding: 12px 16px 12px 42px !important;
            flex: 1;
        }

        .track-input:focus {
            box-shadow: none !important;
        }

        .track-btn {
            border-radius: 50px !important;
            white-space: nowrap;
        }

        .tracking-result-card {
            background: #fff;
            border-radius: var(--fts-radius);
            border: 1px solid var(--fts-gray-200);
            box-shadow: var(--fts-shadow-md);
            padding: 28px;
        }

        .tracking-result-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 12px;
        }

        .tr-label {
            font-size: 0.75rem;
            color: var(--fts-gray-500);
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .tr-value {
            color: var(--fts-navy-900);
            margin-bottom: 0;
        }

        .tracking-result-card .status-progress {
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
        }

        .tr-mini-stat {
            display: flex;
            align-items: center;
            gap: 12px;
            background: var(--fts-gray-100);
            border-radius: var(--fts-radius-sm);
            padding: 14px;
            height: 100%;
        }

        .tr-mini-stat i {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .tr-mini-stat span {
            display: block;
            font-size: 0.72rem;
            color: var(--fts-gray-500);
        }

        .tr-mini-stat strong {
            font-size: 0.88rem;
            color: var(--fts-navy-900);
        }

        .tr-progress-track {
            display: flex;
            align-items: center;
            margin-top: 12px;
            overflow-x: auto;
        }

        .tr-progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            min-width: 64px;
        }

        .tr-dot {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--fts-gray-200);
            color: var(--fts-gray-500);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.78rem;
        }

        .tr-progress-step.done .tr-dot {
            background: var(--fts-cyan-500);
            color: #fff;
        }

        .tr-progress-step.active .tr-dot {
            background: var(--fts-blue-600);
            color: #fff;
            box-shadow: 0 0 0 5px var(--fts-blue-100);
        }

        .tr-step-label {
            font-size: 0.7rem;
            font-weight: 600;
            color: var(--fts-gray-700);
            white-space: nowrap;
        }

        .tr-progress-bar {
            flex: 1;
            height: 3px;
            background: var(--fts-gray-200);
            min-width: 16px;
        }

        .tr-progress-bar.done,
        .tr-progress-bar.active {
            background: var(--fts-cyan-500);
        }

        /* ============================================================
   STATISTICS SECTION
   ============================================================ */
        .stats-section {
            background: linear-gradient(135deg, var(--fts-navy-950), var(--fts-blue-700));
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .stats-grid {
            opacity: 0.5;
        }

        .stat-box {
            text-align: center;
            padding: 20px 10px;
        }

        .stat-icon {
            font-size: 1.6rem;
            color: var(--fts-cyan-400);
            margin-bottom: 12px;
            display: block;
        }

        .stat-box .stat-number {
            font-size: clamp(1.9rem, 3.4vw, 2.5rem);
            font-weight: 800;
            display: block;
            margin-bottom: 6px;
            font-family: var(--font-heading);
        }

        .stat-box .stat-label {
            font-size: 0.82rem;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
        }

        /* ============================================================
   FEATURE CARDS
   ============================================================ */
        .feature-card {
            background: #fff;
            border: 1px solid var(--fts-gray-200);
            border-radius: var(--fts-radius);
            padding: 30px 24px;
            height: 100%;
            transition: var(--fts-transition);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: linear-gradient(180deg, var(--fts-cyan-500), var(--fts-blue-700));
            transition: height 0.35s ease;
        }

        .feature-card:hover {
            box-shadow: var(--fts-shadow-md);
            transform: translateY(-6px);
            border-color: transparent;
        }

        .feature-card:hover::before {
            height: 100%;
        }

        .feature-icon {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
            transition: var(--fts-transition);
        }

        .feature-card:hover .feature-icon {
            background: linear-gradient(135deg, var(--fts-cyan-500), var(--fts-blue-700));
            color: #fff;
            transform: rotate(-6deg) scale(1.05);
        }

        .feature-card h5 {
            color: var(--fts-navy-900);
            margin-bottom: 10px;
            font-size: 1.04rem;
        }

        .feature-card p {
            color: var(--fts-gray-500);
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        /* ============================================================
   WORKFLOW SECTION
   ============================================================ */
        .workflow-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 0;
        }

        .workflow-step {
            background: #fff;
            border: 1px solid var(--fts-gray-200);
            border-radius: var(--fts-radius);
            padding: 22px 16px;
            text-align: center;
            width: 165px;
            box-shadow: var(--fts-shadow-sm);
            transition: var(--fts-transition);
        }

        .workflow-step:hover {
            box-shadow: var(--fts-shadow-md);
            transform: translateY(-5px);
            border-color: var(--fts-cyan-500);
        }

        .workflow-step .wf-num {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--fts-cyan-500), var(--fts-blue-700));
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.85rem;
            margin: 0 auto 12px;
        }

        .workflow-step i {
            font-size: 1.5rem;
            color: var(--fts-blue-600);
            margin-bottom: 8px;
            display: block;
        }

        .workflow-step h6 {
            color: var(--fts-navy-900);
            font-size: 0.82rem;
            margin-bottom: 0;
            font-weight: 700;
            line-height: 1.4;
        }

        .workflow-arrow {
            color: var(--fts-cyan-500);
            font-size: 1.3rem;
            margin: 0 4px;
        }

        @media (max-width: 768px) {
            .workflow-arrow {
                transform: rotate(90deg);
                margin: 4px 0;
            }
        }

        /* ============================================================
   ROLE CARDS
   ============================================================ */
        .role-card {
            border-radius: var(--fts-radius);
            padding: 36px 30px;
            height: 100%;
            transition: var(--fts-transition);
            position: relative;
            color: #fff;
            overflow: hidden;
        }

        .role-card.role-super {
            background: linear-gradient(160deg, var(--fts-navy-950), #02091a);
        }

        .role-card.role-admin {
            background: linear-gradient(160deg, var(--fts-blue-700), var(--fts-blue-600));
        }

        .role-card.role-user {
            background: linear-gradient(160deg, #0e3d4a, #0a2c36);
        }

        .role-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--fts-shadow-lg);
        }

        .role-card .role-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.13);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .role-card h4 {
            color: #fff;
            margin-bottom: 6px;
        }

        .role-card .role-tag {
            font-size: 0.74rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--fts-cyan-400);
            margin-bottom: 20px;
            display: block;
        }

        .role-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .role-card ul li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.88);
        }

        .role-card ul li i {
            color: var(--fts-cyan-400);
            margin-top: 3px;
        }

        /* ============================================================
   FILE TIMELINE SHOWCASE
   ============================================================ */
        .vertical-timeline {
            position: relative;
            padding-left: 56px;
        }

        .vertical-timeline::before {
            content: "";
            position: absolute;
            left: 22px;
            top: 6px;
            bottom: 6px;
            width: 2px;
            background: var(--fts-gray-200);
        }

        .tl-item {
            position: relative;
            margin-bottom: 28px;
        }

        .tl-item:last-child {
            margin-bottom: 0;
        }

        .tl-icon-wrap {
            position: absolute;
            left: -56px;
            top: 0;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--fts-cyan-500);
            color: var(--fts-blue-600);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            box-shadow: var(--fts-shadow-sm);
            z-index: 1;
        }

        .tl-content {
            background: #fff;
            border: 1px solid var(--fts-gray-200);
            border-radius: var(--fts-radius-sm);
            padding: 18px 20px;
            transition: var(--fts-transition);
        }

        .tl-content:hover {
            box-shadow: var(--fts-shadow-md);
            border-color: transparent;
        }

        .tl-content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 10px;
        }

        .tl-content-header h6 {
            color: var(--fts-navy-900);
            margin-bottom: 0;
            font-size: 0.98rem;
        }

        .tl-status-badge {
            font-size: 0.7rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 50px;
        }

        .tl-created {
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
        }

        .tl-assigned {
            background: #fef3e2;
            color: #b07a17;
        }

        .tl-transferred {
            background: var(--fts-cyan-100);
            color: var(--fts-cyan-500);
        }

        .tl-pending {
            background: #fef3e2;
            color: #b07a17;
        }

        .tl-approved {
            background: #e7f7ec;
            color: #2a9d5c;
        }

        .tl-delivered {
            background: #e9eefc;
            color: var(--fts-blue-600);
        }

        .tl-completed {
            background: #e7f7ec;
            color: #2a9d5c;
        }

        .tl-meta-row {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
            font-size: 0.78rem;
            color: var(--fts-gray-500);
            margin-bottom: 8px;
        }

        .tl-meta-row i {
            margin-right: 4px;
            color: var(--fts-gray-500);
        }

        .tl-remarks {
            font-size: 0.86rem;
            color: var(--fts-gray-700);
            margin-bottom: 0;
        }

        /* ============================================================
   SECURITY SECTION
   ============================================================ */
        .security-section {
            background: linear-gradient(150deg, var(--fts-navy-950), var(--fts-navy-900) 60%, var(--fts-blue-700));
            position: relative;
            overflow: hidden;
        }

        .security-card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            border-radius: var(--fts-radius);
            padding: 28px 22px;
            height: 100%;
            transition: var(--fts-transition);
            text-align: center;
        }

        .security-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-6px);
            border-color: var(--fts-cyan-400);
        }

        .security-icon {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: rgba(45, 212, 232, 0.14);
            color: var(--fts-cyan-400);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin: 0 auto 16px;
        }

        .security-card h6 {
            color: #fff;
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .security-card p {
            color: rgba(255, 255, 255, 0.65);
            font-size: 0.85rem;
            margin-bottom: 0;
        }

        /* ============================================================
   SCREENSHOT SHOWCASE — Laptop / Desktop mockups (CSS-built)
   ============================================================ */
        .laptop-mockup {
            position: relative;
        }

        .laptop-screen {
            background: #fff;
            border-radius: 14px 14px 4px 4px;
            border: 10px solid var(--fts-navy-900);
            box-shadow: var(--fts-shadow-lg);
            overflow: hidden;
        }

        .laptop-base {
            height: 14px;
            background: linear-gradient(180deg, var(--fts-navy-900), #050d1c);
            border-radius: 0 0 10px 10px;
            margin: 0 -4%;
            box-shadow: var(--fts-shadow-md);
        }

        .desktop-mockup {
            position: relative;
        }

        .desktop-screen {
            background: #fff;
            border-radius: 12px;
            border: 1px solid var(--fts-gray-200);
            box-shadow: var(--fts-shadow-md);
            overflow: hidden;
        }

        .mock-header {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 16px;
            border-bottom: 1px solid var(--fts-gray-200);
            background: var(--fts-gray-100);
            font-size: 0.74rem;
            color: var(--fts-gray-500);
        }

        .mock-screen-body {
            display: flex;
            min-height: 280px;
        }

        .mock-sidebar {
            width: 56px;
            background: var(--fts-navy-900);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 16px 0;
            gap: 14px;
        }

        .mock-side-item {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: rgba(255, 255, 255, 0.08);
            color: rgba(255, 255, 255, 0.55);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
        }

        .mock-side-item.active {
            background: var(--fts-cyan-500);
            color: #06303a;
        }

        .mock-main {
            flex: 1;
            padding: 18px;
        }

        .mock-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .mock-stat {
            flex: 1;
            min-width: 80px;
            background: var(--fts-blue-100);
            border-radius: 10px;
            padding: 12px;
            text-align: center;
        }

        .mock-stat strong {
            display: block;
            color: var(--fts-navy-900);
            font-size: 1.05rem;
        }

        .mock-stat span {
            font-size: 0.66rem;
            color: var(--fts-gray-500);
        }

        .mock-chart-block {
            background: var(--fts-gray-100);
            border-radius: 12px;
            padding: 18px;
            margin-top: 10px;
        }

        .mock-chart-block.small {
            padding: 14px;
        }

        .mock-chart-bars {
            display: flex;
            align-items: flex-end;
            gap: 10px;
            height: 100px;
        }

        .mock-chart-bars span {
            flex: 1;
            background: linear-gradient(180deg, var(--fts-cyan-500), var(--fts-blue-600));
            border-radius: 6px 6px 0 0;
            animation: barGrow 1.2s ease-out;
        }

        @keyframes barGrow {
            from {
                transform: scaleY(0);
                transform-origin: bottom;
            }

            to {
                transform: scaleY(1);
            }
        }

        .mock-screen-body-simple {
            padding: 16px;
            min-height: 220px;
        }

        .mock-table-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 8px;
            padding: 10px 6px;
            font-size: 0.78rem;
            color: var(--fts-gray-700);
            border-bottom: 1px solid var(--fts-gray-200);
        }

        .mock-table-row.header-row {
            font-weight: 700;
            color: var(--fts-navy-900);
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        .badge-soft {
            padding: 3px 10px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.72rem;
            display: inline-block;
            width: fit-content;
        }

        .badge-soft.success {
            background: #e7f7ec;
            color: #2a9d5c;
        }

        .badge-soft.warning {
            background: #fef3e2;
            color: #b07a17;
        }

        .badge-soft.info {
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
        }

        .showcase-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .showcase-item {
            display: flex;
            align-items: center;
            gap: 16px;
            background: #fff;
            border: 1px solid var(--fts-gray-200);
            border-radius: var(--fts-radius-sm);
            padding: 14px 18px;
            transition: var(--fts-transition);
        }

        .showcase-item:hover {
            box-shadow: var(--fts-shadow-sm);
            border-color: var(--fts-cyan-500);
            transform: translateX(4px);
        }

        .showcase-item i {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .showcase-item strong {
            display: block;
            color: var(--fts-navy-900);
            font-size: 0.92rem;
        }

        .showcase-item span {
            font-size: 0.8rem;
            color: var(--fts-gray-500);
        }

        /* ============================================================
   WHY CHOOSE US
   ============================================================ */
        .why-item {
            display: flex;
            gap: 16px;
            padding: 22px;
            border-radius: var(--fts-radius);
            transition: var(--fts-transition);
            height: 100%;
            background: #fff;
            border: 1px solid var(--fts-gray-200);
        }

        .why-item:hover {
            box-shadow: var(--fts-shadow-md);
            background: var(--fts-cyan-100);
            border-color: transparent;
        }

        .why-icon {
            min-width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--fts-navy-900);
            color: var(--fts-cyan-400);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .why-item h6 {
            color: var(--fts-navy-900);
            margin-bottom: 6px;
            font-size: 0.94rem;
        }

        .why-item p {
            color: var(--fts-gray-500);
            font-size: 0.86rem;
            margin-bottom: 0;
        }

        /* ============================================================
   TESTIMONIALS
   ============================================================ */
        .testimonial-card {
            background: #fff;
            border: 1px solid var(--fts-gray-200);
            border-radius: var(--fts-radius);
            padding: 32px 26px;
            height: 100%;
            transition: var(--fts-transition);
            position: relative;
        }

        .testimonial-card:hover {
            box-shadow: var(--fts-shadow-md);
            transform: translateY(-5px);
        }

        .quote-mark {
            font-size: 1.6rem;
            color: var(--fts-cyan-100);
            margin-bottom: 14px;
            display: block;
        }

        .testimonial-card p {
            color: var(--fts-gray-700);
            font-size: 0.94rem;
            font-style: italic;
            margin-bottom: 22px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .author-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--fts-blue-100);
            color: var(--fts-blue-600);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .testimonial-author strong {
            display: block;
            color: var(--fts-navy-900);
            font-size: 0.9rem;
        }

        .testimonial-author span {
            font-size: 0.78rem;
            color: var(--fts-gray-500);
        }

        /* ============================================================
   CTA BANNER
   ============================================================ */
        .cta-banner {
            background:
                radial-gradient(circle at 20% 20%, rgba(45, 212, 232, 0.25), transparent 50%),
                linear-gradient(135deg, var(--fts-blue-700), var(--fts-navy-950));
            border-radius: 26px;
            padding: 64px 40px;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-banner h2 {
            color: #fff;
            margin-bottom: 14px;
            font-size: clamp(1.6rem, 3vw, 2.2rem);
        }

        .cta-banner p {
            color: rgba(255, 255, 255, 0.82);
            max-width: 600px;
            margin: 0 auto 30px;
        }

        /* ============================================================
   FOOTER
   ============================================================ */
        .footer-fts {
            background: var(--fts-navy-950);
            color: rgba(255, 255, 255, 0.7);
            padding-top: 70px;
        }

        .footer-fts h6 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .footer-fts ul {
            list-style: none;
            padding: 0;
        }

        .footer-fts ul li {
            margin-bottom: 12px;
            font-size: 0.86rem;
        }

        .footer-fts ul li a {
            color: rgba(255, 255, 255, 0.6);
            transition: var(--fts-transition);
            font-size: 0.9rem;
        }

        .footer-fts ul li a:hover {
            color: var(--fts-cyan-400);
            padding-left: 4px;
        }

        .footer-about-text {
            font-size: 0.88rem;
            max-width: 320px;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            font-size: 1.15rem;
            color: #fff;
            margin-bottom: 16px;
            font-family: var(--font-heading);
        }

        .footer-legal-row {
            text-align: center;
            margin-top: 50px;
            font-size: 0.84rem;
        }

        .footer-legal-row a {
            color: rgba(255, 255, 255, 0.65);
        }

        .footer-legal-row a:hover {
            color: var(--fts-cyan-400);
        }

        .legal-dot {
            color: rgba(255, 255, 255, 0.3);
            margin: 0 8px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 24px;
            padding: 22px 0;
            font-size: 0.82rem;
        }

        .social-icon-fts {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.07);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: var(--fts-transition);
        }

        .social-icon-fts:hover {
            background: var(--fts-cyan-500);
            color: #06303a;
            transform: translateY(-3px);
        }

        /* ============================================================
   SCROLL-TO-TOP BUTTON
   ============================================================ */
        .scroll-top-btn {
            position: fixed;
            bottom: 26px;
            right: 26px;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--fts-cyan-500), var(--fts-blue-600));
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--fts-shadow-md);
            opacity: 0;
            visibility: hidden;
            transition: var(--fts-transition);
            z-index: 999;
            border: none;
            font-size: 1.05rem;
        }

        .scroll-top-btn.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top-btn:hover {
            transform: translateY(-3px);
        }

        /* ============================================================
   RESPONSIVE OVERRIDES
   ============================================================ */
        @media (max-width: 991px) {
            .hero-section {
                padding: 130px 0 90px;
            }

            .pipeline-track {
                justify-content: flex-start;
                gap: 6px;
            }

            .vertical-timeline {
                padding-left: 46px;
            }

            .tl-icon-wrap {
                left: -46px;
                width: 38px;
                height: 38px;
                font-size: 0.88rem;
            }
        }

        @media (max-width: 576px) {
            .hero-stats-mini {
                gap: 18px;
            }

            .workflow-step {
                width: 130px;
                padding: 16px 10px;
            }

            .mock-screen-body {
                flex-direction: column;
            }

            .mock-sidebar {
                flex-direction: row;
                width: 100%;
                padding: 10px;
            }
        }

        /* Reduced motion accessibility */
        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.001ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.001ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

    <!-- ============================================================ -->
    <!-- NAVBAR -->
    <!-- ============================================================ -->
    <nav class="navbar navbar-expand-lg navbar-fts fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand-fts" href="#home">
                <span class="brand-icon"><i class="fa-solid fa-folder-tree"></i></span>
                <span>
                    File Tracking <small class="d-block brand-sub">Department Management System</small>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto mt-3 mt-lg-0 gap-1">
                    <li class="nav-item"><a class="nav-link" href="#submit">Submit Document</a></li>
                    <li class="nav-item"><a class="nav-link" href="#track">Track File</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#workflow">Workflow</a></li>
                    <li class="nav-item"><a class="nav-link" href="#roles">User Roles</a></li>
                    <li class="nav-item"><a class="nav-link" href="#security">Security</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <a href="#track" class="btn-fts-outline d-none d-sm-inline-flex"><i class="fa-solid fa-magnifying-glass me-1"></i> Track File</a>
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn-fts-primary"><i class="fa-solid fa-gauge-high me-1"></i> Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="btn-fts-outline">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-fts-primary">Get Started</a>
                    @endif
                    @endauth
                    @else
                    <a href="#" class="btn-fts-outline">Login</a>
                    <a href="#" class="btn-fts-primary">Get Started</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- ============================================================ -->
    <!-- HERO SECTION -->
    <!-- ============================================================ -->
    <header class="hero-section" id="home">
        <div class="hero-bg-grid"></div>
        <div class="floating-doc doc-1"><i class="fa-solid fa-file-lines"></i></div>
        <div class="floating-doc doc-2"><i class="fa-solid fa-file-shield"></i></div>
        <div class="floating-doc doc-3"><i class="fa-solid fa-file-circle-check"></i></div>
        <div class="floating-doc doc-4"><i class="fa-solid fa-folder-open"></i></div>

        <div class="container position-relative">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="hero-badge">
                        <span class="pulse-dot"></span> Trusted by Government &amp; Enterprise Institutions
                    </div>
                    <h1>Track Every File.<br>Monitor Every Movement.</h1>
                    <p class="lead">Secure digital file tracking system with department-wise control, role-based access, transfer approvals, public document submission, and complete file movement history.</p>
                    <div class="d-flex flex-wrap gap-3">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/dashboard') }}" class="btn-fts-light"><i class="fa-solid fa-gauge-high me-2"></i>Go to Dashboard</a>
                        @else
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-fts-cyan"><i class="fa-solid fa-rocket me-2"></i>Get Started</a>
                        @endif
                        <a href="{{ route('login') }}" class="btn-fts-light"><i class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                        @endauth
                        @else
                        <a href="#" class="btn-fts-cyan"><i class="fa-solid fa-rocket me-2"></i>Get Started</a>
                        <a href="#" class="btn-fts-light"><i class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                        @endif
                        <a href="#track" class="btn-fts-ghost"><i class="fa-solid fa-magnifying-glass me-2"></i>Track File</a>
                    </div>

                    <div class="hero-stats-mini">
                        <div>
                            <h3>100%</h3><span>Traceability</span>
                        </div>
                        <div>
                            <h3>24/7</h3><span>Monitoring</span>
                        </div>
                        <div>
                            <h3>Multi</h3><span>Department</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="hero-pipeline-card">
                        <div class="pipeline-header">
                            <span class="mock-dot" style="background:#ff5f57;"></span>
                            <span class="mock-dot" style="background:#febc2e;"></span>
                            <span class="mock-dot" style="background:#28c840;"></span>
                            <span class="ms-2">Live File Movement</span>
                        </div>

                        <div class="pipeline-track">
                            <div class="pipeline-node done">
                                <i class="fa-solid fa-file-circle-plus"></i>
                                <span>Created</span>
                            </div>
                            <div class="pipeline-line done"></div>
                            <div class="pipeline-node done">
                                <i class="fa-solid fa-building"></i>
                                <span>Dept A</span>
                            </div>
                            <div class="pipeline-line active"></div>
                            <div class="pipeline-node active">
                                <i class="fa-solid fa-truck-fast"></i>
                                <span>Transfer</span>
                            </div>
                            <div class="pipeline-line"></div>
                            <div class="pipeline-node">
                                <i class="fa-solid fa-building-shield"></i>
                                <span>Dept B</span>
                            </div>
                            <div class="pipeline-line"></div>
                            <div class="pipeline-node">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Done</span>
                            </div>
                        </div>

                        <div class="pipeline-status-row">
                            <div class="status-chip status-progress"><i class="fa-solid fa-circle-notch fa-spin"></i> In Transfer</div>
                            <div class="status-chip status-id">#FTS-2026-08231</div>
                        </div>

                        <div class="glass-mini-row">
                            <div class="glass-mini">
                                <strong>312</strong>
                                <span>Active Files</span>
                            </div>
                            <div class="glass-mini">
                                <strong>09</strong>
                                <span>Departments</span>
                            </div>
                            <div class="glass-mini">
                                <strong>97%</strong>
                                <span>On-Time Approval</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================================ -->
    <!-- PUBLIC FILE SUBMISSION PORTAL -->
    <!-- ============================================================ -->
    <section class="section-padding public-submit-section" id="submit">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="eyebrow eyebrow-cyan"><i class="fa-solid fa-globe"></i> No Login Required</span>
                    <h2 class="section-title">Submit Documents Without Login</h2>
                    <p class="section-subtitle-left">External users can securely submit documents directly to the organization and receive a unique tracking number for future reference — no account needed.</p>

                    <ul class="check-list">
                        <li><i class="fa-solid fa-circle-check"></i> Drag &amp; Drop Upload</li>
                        <li><i class="fa-solid fa-circle-check"></i> PDF, DOC/DOCX &amp; Image Support</li>
                        <li><i class="fa-solid fa-circle-check"></i> Automatic Tracking Number Generation</li>
                        <li><i class="fa-solid fa-circle-check"></i> Instant Success Confirmation</li>
                    </ul>

                    <a href="#track" class="btn-fts-outline mt-2 d-inline-flex align-items-center gap-2">
                        <i class="fa-solid fa-magnifying-glass"></i> Track an Existing Document
                    </a>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <div class="upload-card">
                        <form id="publicSubmitForm" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label-fts">Full Name</label>
                                    <input type="text" class="form-control form-control-fts" placeholder="Enter your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-fts">Email Address</label>
                                    <input type="email" class="form-control form-control-fts" placeholder="you@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-fts">Phone Number</label>
                                    <input type="tel" class="form-control form-control-fts" placeholder="+91 00000 00000" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-fts">Organization Name</label>
                                    <input type="text" class="form-control form-control-fts" placeholder="Optional">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-fts">Subject</label>
                                    <input type="text" class="form-control form-control-fts" placeholder="Subject of document" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-fts">Department</label>
                                    <select class="form-select form-control-fts" required>
                                        <option value="" selected disabled>Select Department</option>
                                        <option>Administration</option>
                                        <option>Finance</option>
                                        <option>Human Resources</option>
                                        <option>Legal Affairs</option>
                                        <option>Public Relations</option>
                                        <option>IT Department</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label-fts">Remarks</label>
                                    <textarea class="form-control form-control-fts" rows="2" placeholder="Additional remarks (optional)"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label-fts">File Upload</label>
                                    <div class="dropzone" id="dropzone">
                                        <input type="file" id="fileInput" class="d-none" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                                        <div class="dropzone-content" id="dropzoneContent">
                                            <div class="cloud-upload-icon">
                                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                            </div>
                                            <p class="mb-1"><strong>Click to upload</strong> or drag and drop</p>
                                            <span class="dropzone-hint">PDF, DOC, DOCX, JPG, PNG — Max 10MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <button type="submit" class="btn-fts-primary"><i class="fa-solid fa-paper-plane me-2"></i>Submit Document</button>
                                <a href="#track" class="btn-fts-outline"><i class="fa-solid fa-magnifying-glass me-2"></i>Track Existing Document</a>
                            </div>

                            <div class="success-confirmation d-none" id="submitSuccess">
                                <i class="fa-solid fa-circle-check"></i>
                                <div>
                                    <strong>Document Submitted Successfully</strong>
                                    <p class="mb-0">Your tracking number is <span class="tracking-number-pill" id="generatedTrackingNumber">FTS-2026-00000</span></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================ -->
    <!-- FILE TRACKING SECTION -->
    <!-- ============================================================ -->
    <section class="section-padding bg-light-soft" id="track">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow"><i class="fa-solid fa-magnifying-glass"></i> Track Your File</span>
                <h2 class="section-title">Track Your File Status</h2>
                <p class="section-subtitle mx-auto">Enter your tracking number to see exactly where your file is and what's happening with it.</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-8">
                    <div class="track-search-card">
                        <form id="trackForm" class="track-search-form">
                            <i class="fa-solid fa-hashtag input-icon"></i>
                            <input type="text" id="trackingInput" class="form-control form-control-fts track-input" placeholder="Enter Tracking Number e.g. FTS-2026-08231" value="FTS-2026-08231">
                            <button type="submit" class="btn-fts-cyan track-btn"><i class="fa-solid fa-magnifying-glass me-2"></i>Track</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-8">
                    <div class="tracking-result-card" id="trackingResultCard">
                        <div class="tracking-result-header">
                            <div>
                                <span class="tr-label">File Number</span>
                                <h5 class="tr-value">#FTS-2026-08231</h5>
                            </div>
                            <span class="status-chip status-progress"><i class="fa-solid fa-circle-notch fa-spin"></i> In Transfer</span>
                        </div>

                        <div class="row g-3 my-3">
                            <div class="col-md-4">
                                <div class="tr-mini-stat">
                                    <i class="fa-solid fa-building"></i>
                                    <div>
                                        <span>Current Department</span>
                                        <strong>Finance Department</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="tr-mini-stat">
                                    <i class="fa-solid fa-user-tie"></i>
                                    <div>
                                        <span>Current Holder</span>
                                        <strong>Dept. Admin — R. Sharma</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="tr-mini-stat">
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                    <div>
                                        <span>Last Updated</span>
                                        <strong>22 June 2026, 10:42 AM</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tr-progress-track">
                            <div class="tr-progress-step done">
                                <span class="tr-dot"><i class="fa-solid fa-check"></i></span>
                                <span class="tr-step-label">Created</span>
                            </div>
                            <div class="tr-progress-bar done"></div>
                            <div class="tr-progress-step done">
                                <span class="tr-dot"><i class="fa-solid fa-check"></i></span>
                                <span class="tr-step-label">Assigned</span>
                            </div>
                            <div class="tr-progress-bar active"></div>
                            <div class="tr-progress-step active">
                                <span class="tr-dot"><i class="fa-solid fa-truck-fast"></i></span>
                                <span class="tr-step-label">Transfer</span>
                            </div>
                            <div class="tr-progress-bar"></div>
                            <div class="tr-progress-step">
                                <span class="tr-dot"><i class="fa-solid fa-stamp"></i></span>
                                <span class="tr-step-label">Approval</span>
                            </div>
                            <div class="tr-progress-bar"></div>
                            <div class="tr-progress-step">
                                <span class="tr-dot"><i class="fa-solid fa-flag-checkered"></i></span>
                                <span class="tr-step-label">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- KEY STATISTICS SECTION -->
    <!-- ============================================================ -->
    <section class="section-padding stats-section" id="stats">
        <div class="hero-bg-grid stats-grid"></div>
        <div class="container position-relative">
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                    <div class="stat-box">
                        <i class="fa-solid fa-route stat-icon"></i>
                        <span class="stat-number" data-count="100" data-suffix="%">0%</span>
                        <span class="stat-label">File Traceability</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="stat-box">
                        <i class="fa-solid fa-infinity stat-icon"></i>
                        <span class="stat-number" data-count="100" data-suffix="%">0%</span>
                        <span class="stat-label">Unlimited Tracking</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-box">
                        <i class="fa-solid fa-sitemap stat-icon"></i>
                        <span class="stat-number" data-count="100" data-suffix="%">0%</span>
                        <span class="stat-label">Multi-Department</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="stat-box">
                        <i class="fa-solid fa-tower-broadcast stat-icon"></i>
                        <span class="stat-number" data-count="100" data-suffix="%">0%</span>
                        <span class="stat-label">Real-Time Monitoring</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-box">
                        <i class="fa-solid fa-user-shield stat-icon"></i>
                        <span class="stat-number" data-count="100" data-suffix="%">0%</span>
                        <span class="stat-label">Role-Based Security</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="stat-box">
                        <i class="fa-solid fa-stamp stat-icon"></i>
                        <span class="stat-number" data-count="100" data-suffix="%">0%</span>
                        <span class="stat-label">Approval Workflow</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- FEATURES SECTION -->
    <!-- ============================================================ -->
    <section class="section-padding" id="features">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> Core Capabilities</span>
                <h2 class="section-title">Everything Your Organization Needs</h2>
                <p class="section-subtitle mx-auto">A complete toolkit to digitize, secure, and streamline file movement across every department.</p>
            </div>

            <div class="row g-4">
                @php
                $features = [
                ['icon' => 'fa-globe', 'title' => 'Public File Submission', 'desc' => 'Allow external users to submit documents securely without needing an account.'],
                ['icon' => 'fa-file-circle-plus', 'title' => 'File Creation & Management', 'desc' => 'Create digital files instantly and manage their full lifecycle.'],
                ['icon' => 'fa-building', 'title' => 'Department Management', 'desc' => 'Structure your organization into departments with dedicated workflows.'],
                ['icon' => 'fa-users-gear', 'title' => 'User Management', 'desc' => 'Create and manage users with designations across the organization.'],
                ['icon' => 'fa-id-badge', 'title' => 'Designation Management', 'desc' => 'Define designations and assign them to streamline responsibilities.'],
                ['icon' => 'fa-truck-fast', 'title' => 'File Transfer System', 'desc' => 'Transfer files between departments with structured, trackable steps.'],
                ['icon' => 'fa-people-arrows', 'title' => 'Cross Department Approval', 'desc' => 'Multi-level approval chains for accountable cross-department transfers.'],
                ['icon' => 'fa-clipboard-list', 'title' => 'Transfer Request Management', 'desc' => 'Manage incoming and outgoing transfer requests with full visibility.'],
                ['icon' => 'fa-timeline', 'title' => 'Timeline Tracking', 'desc' => 'View a complete chronological history of every action on a file.'],
                ['icon' => 'fa-filter', 'title' => 'Search & Advanced Filters', 'desc' => 'Locate any file instantly with powerful multi-criteria filters.'],
                ['icon' => 'fa-book', 'title' => 'File History Logs', 'desc' => 'Maintain detailed historical logs for every file in the system.'],
                ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Audit Trail Monitoring', 'desc' => 'Every transfer and approval is logged for compliance and review.'],
                ['icon' => 'fa-user-shield', 'title' => 'Role Based Access Control', 'desc' => 'Granular permissions ensure users see only what they\'re authorized to.'],
                ['icon' => 'fa-chart-line', 'title' => 'Dashboard Analytics', 'desc' => 'Visual analytics give administrators clear operational insight.'],
                ['icon' => 'fa-bell', 'title' => 'Notification System', 'desc' => 'Stay informed with real-time alerts on file status changes.'],
                ['icon' => 'fa-chart-pie', 'title' => 'Department Wise Monitoring', 'desc' => 'Monitor performance and load across every department in real time.'],
                ];
                @endphp

                @foreach ($features as $i => $feature)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 50 }}">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid {{ $feature['icon'] }}"></i></div>
                        <h5>{{ $feature['title'] }}</h5>
                        <p>{{ $feature['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ============================================================ -->
    <!-- SYSTEM WORKFLOW SECTION -->
    <!-- ============================================================ -->
    <section class="section-padding bg-light-soft" id="workflow">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow eyebrow-cyan"><i class="fa-solid fa-diagram-project"></i> Process Flow</span>
                <h2 class="section-title">A Transparent System Workflow</h2>
                <p class="section-subtitle mx-auto">Every file follows a clear, auditable path from creation to closure.</p>
            </div>

            <div class="workflow-wrap">
                @php
                $steps = [
                ['icon' => 'fa-user-plus', 'label' => 'Public/User Creates File'],
                ['icon' => 'fa-building', 'label' => 'File Assigned to Department'],
                ['icon' => 'fa-truck-fast', 'label' => 'Transfer Request Generated'],
                ['icon' => 'fa-magnifying-glass', 'label' => 'Admin Reviews Request'],
                ['icon' => 'fa-stamp', 'label' => 'Approval / Rejection'],
                ['icon' => 'fa-box-open', 'label' => 'File Delivered'],
                ['icon' => 'fa-clock-rotate-left', 'label' => 'Timeline Updated Automatically'],
                ];
                @endphp
                @foreach ($steps as $i => $step)
                <div class="workflow-step" data-aos="zoom-in" data-aos-delay="{{ $i * 60 }}">
                    <span class="wf-num">{{ $i + 1 }}</span>
                    <i class="fa-solid {{ $step['icon'] }}"></i>
                    <h6>{{ $step['label'] }}</h6>
                </div>
                @if (!$loop->last)
                <i class="fa-solid fa-arrow-right workflow-arrow" data-aos="fade-in" data-aos-delay="{{ $i * 60 + 30 }}"></i>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- USER ROLES SECTION -->
    <!-- ============================================================ -->
    <section class="section-padding" id="roles">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow"><i class="fa-solid fa-id-card"></i> Access Hierarchy</span>
                <h2 class="section-title">Built for Every Level of Your Organization</h2>
                <p class="section-subtitle mx-auto">Each role is scoped with precise permissions to maintain security and accountability.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="role-card role-super">
                        <div class="role-icon"><i class="fa-solid fa-user-gear"></i></div>
                        <span class="role-tag">Highest Authority</span>
                        <h4>Super Admin</h4>
                        <ul class="mt-3">
                            <li><i class="fa-solid fa-circle-check"></i> Manage Departments</li>
                            <li><i class="fa-solid fa-circle-check"></i> Create Admins</li>
                            <li><i class="fa-solid fa-circle-check"></i> Manage Designations</li>
                            <li><i class="fa-solid fa-circle-check"></i> View All Files</li>
                            <li><i class="fa-solid fa-circle-check"></i> Monitor Entire System</li>
                            <li><i class="fa-solid fa-circle-check"></i> Search All Records</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="role-card role-admin">
                        <div class="role-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <span class="role-tag">Department Authority</span>
                        <h4>Admin</h4>
                        <ul class="mt-3">
                            <li><i class="fa-solid fa-circle-check"></i> Create Users</li>
                            <li><i class="fa-solid fa-circle-check"></i> Manage Designations</li>
                            <li><i class="fa-solid fa-circle-check"></i> View Department Files</li>
                            <li><i class="fa-solid fa-circle-check"></i> Approve Transfers</li>
                            <li><i class="fa-solid fa-circle-check"></i> Monitor Department Activities</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="role-card role-user">
                        <div class="role-icon"><i class="fa-solid fa-user"></i></div>
                        <span class="role-tag">Standard Access</span>
                        <h4>User</h4>
                        <ul class="mt-3">
                            <li><i class="fa-solid fa-circle-check"></i> Create Files</li>
                            <li><i class="fa-solid fa-circle-check"></i> Upload Documents</li>
                            <li><i class="fa-solid fa-circle-check"></i> Transfer Files</li>
                            <li><i class="fa-solid fa-circle-check"></i> Track Files</li>
                            <li><i class="fa-solid fa-circle-check"></i> View History</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- FILE TIMELINE SHOWCASE -->
    <!-- ============================================================ -->
    <section class="section-padding bg-light-soft" id="timeline">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow eyebrow-cyan"><i class="fa-solid fa-timeline"></i> File Journey</span>
                <h2 class="section-title">Complete File Timeline at a Glance</h2>
                <p class="section-subtitle mx-auto">Every stage of a file's journey is logged with full context — who, when, where, and why.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="vertical-timeline">
                        @php
                        $timeline = [
                        ['icon' => 'fa-file-circle-plus', 'title' => 'File Created', 'date' => '18 June 2026, 09:10 AM', 'user' => 'Anjali Verma', 'dept' => 'Public Submission', 'status' => 'Created', 'status_class' => 'tl-created', 'remarks' => 'Document submitted via public portal for review.'],
                        ['icon' => 'fa-building', 'title' => 'Assigned to Department', 'date' => '18 June 2026, 11:45 AM', 'user' => 'System Auto-Assign', 'dept' => 'Administration', 'status' => 'Assigned', 'status_class' => 'tl-assigned', 'remarks' => 'File routed to Administration for initial screening.'],
                        ['icon' => 'fa-truck-fast', 'title' => 'Transferred', 'date' => '19 June 2026, 02:30 PM', 'user' => 'R. Sharma (Admin)', 'dept' => 'Finance Department', 'status' => 'Transferred', 'status_class' => 'tl-transferred', 'remarks' => 'Forwarded to Finance for budget verification.'],
                        ['icon' => 'fa-stamp', 'title' => 'Approval Requested', 'date' => '20 June 2026, 10:05 AM', 'user' => 'Finance Team', 'dept' => 'Finance Department', 'status' => 'Pending', 'status_class' => 'tl-pending', 'remarks' => 'Approval requested from department head.'],
                        ['icon' => 'fa-circle-check', 'title' => 'Approved', 'date' => '21 June 2026, 04:20 PM', 'user' => 'Finance Head', 'dept' => 'Finance Department', 'status' => 'Approved', 'status_class' => 'tl-approved', 'remarks' => 'Verified and approved for delivery.'],
                        ['icon' => 'fa-box-open', 'title' => 'Delivered', 'date' => '22 June 2026, 09:00 AM', 'user' => 'System', 'dept' => 'Requesting Department', 'status' => 'Delivered', 'status_class' => 'tl-delivered', 'remarks' => 'File delivered back to originating department.'],
                        ['icon' => 'fa-flag-checkered', 'title' => 'Completed', 'date' => '22 June 2026, 10:42 AM', 'user' => 'System', 'dept' => 'Closed', 'status' => 'Completed', 'status_class' => 'tl-completed', 'remarks' => 'Process closed and archived with full audit trail.'],
                        ];
                        @endphp

                        @foreach ($timeline as $i => $item)
                        <div class="tl-item" data-aos="fade-up" data-aos-delay="{{ $i * 60 }}">
                            <div class="tl-icon-wrap"><i class="fa-solid {{ $item['icon'] }}"></i></div>
                            <div class="tl-content">
                                <div class="tl-content-header">
                                    <h6>{{ $item['title'] }}</h6>
                                    <span class="tl-status-badge {{ $item['status_class'] }}">{{ $item['status'] }}</span>
                                </div>
                                <div class="tl-meta-row">
                                    <span><i class="fa-regular fa-calendar"></i> {{ $item['date'] }}</span>
                                    <span><i class="fa-regular fa-user"></i> {{ $item['user'] }}</span>
                                    <span><i class="fa-solid fa-building"></i> {{ $item['dept'] }}</span>
                                </div>
                                <p class="tl-remarks">{{ $item['remarks'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================ -->
    <!-- SECURITY SECTION -->
    <!-- ============================================================ -->
    <section class="section-padding security-section" id="security">
        <div class="hero-bg-grid stats-grid"></div>
        <div class="container position-relative">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow eyebrow-cyan"><i class="fa-solid fa-shield-halved"></i> Security First</span>
                <h2 class="section-title text-white">Enterprise-Grade Security</h2>
                <p class="section-subtitle mx-auto text-white-soft">Every layer of the system is designed to protect data integrity and organizational trust.</p>
            </div>

            <div class="row g-4">
                @php
                $security = [
                ['icon' => 'fa-user-shield', 'title' => 'Role Based Access Control', 'desc' => 'Strict permission boundaries for every role in the system.'],
                ['icon' => 'fa-fingerprint', 'title' => 'Secure Authentication', 'desc' => 'Modern authentication protects every login session.'],
                ['icon' => 'fa-lock', 'title' => 'Encrypted Passwords', 'desc' => 'Passwords are hashed and encrypted using industry standards.'],
                ['icon' => 'fa-route', 'title' => 'Protected Routes', 'desc' => 'Middleware-secured routes prevent unauthorized access.'],
                ['icon' => 'fa-building-shield', 'title' => 'Department Restrictions', 'desc' => 'Users only access data relevant to their department.'],
                ['icon' => 'fa-clipboard-list', 'title' => 'Audit Logs', 'desc' => 'Every system action is permanently logged for review.'],
                ['icon' => 'fa-timeline', 'title' => 'File Movement History', 'desc' => 'Complete historical record of every file\'s journey.'],
                ['icon' => 'fa-database', 'title' => 'Secure File Storage', 'desc' => 'Documents are stored securely with controlled access.'],
                ];
                @endphp
                @foreach ($security as $i => $item)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 50 }}">
                    <div class="security-card">
                        <div class="security-icon"><i class="fa-solid {{ $item['icon'] }}"></i></div>
                        <h6>{{ $item['title'] }}</h6>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- SCREENSHOT SHOWCASE -->
    <!-- ============================================================ -->
    <section class="section-padding" id="showcase">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow"><i class="fa-solid fa-display"></i> Product Tour</span>
                <h2 class="section-title">A Closer Look at the Platform</h2>
                <p class="section-subtitle mx-auto">Explore the core interfaces administrators and users interact with daily.</p>
            </div>

            <div class="row align-items-center gy-5 mb-5" data-aos="fade-up">
                <div class="col-lg-7">
                    <div class="laptop-mockup">
                        <div class="laptop-screen">
                            <div class="mock-header">
                                <span class="mock-dot" style="background:#ff5f57;"></span>
                                <span class="mock-dot" style="background:#febc2e;"></span>
                                <span class="mock-dot" style="background:#28c840;"></span>
                                <span class="ms-2">Dashboard Overview</span>
                            </div>
                            <div class="mock-screen-body">
                                <div class="mock-sidebar">
                                    <div class="mock-side-item active"><i class="fa-solid fa-gauge-high"></i></div>
                                    <div class="mock-side-item"><i class="fa-solid fa-folder-open"></i></div>
                                    <div class="mock-side-item"><i class="fa-solid fa-users"></i></div>
                                    <div class="mock-side-item"><i class="fa-solid fa-building"></i></div>
                                    <div class="mock-side-item"><i class="fa-solid fa-truck-fast"></i></div>
                                    <div class="mock-side-item"><i class="fa-solid fa-chart-pie"></i></div>
                                </div>
                                <div class="mock-main">
                                    <div class="mock-row mb-3">
                                        <div class="mock-stat"><strong>128</strong><span>Active Files</span></div>
                                        <div class="mock-stat"><strong>34</strong><span>In Transfer</span></div>
                                        <div class="mock-stat"><strong>09</strong><span>Departments</span></div>
                                        <div class="mock-stat"><strong>97%</strong><span>Approved</span></div>
                                    </div>
                                    <div class="mock-chart-block">
                                        <div class="mock-chart-bars">
                                            <span style="height:40%;"></span>
                                            <span style="height:65%;"></span>
                                            <span style="height:50%;"></span>
                                            <span style="height:80%;"></span>
                                            <span style="height:60%;"></span>
                                            <span style="height:90%;"></span>
                                            <span style="height:70%;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="laptop-base"></div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="showcase-list">
                        <div class="showcase-item">
                            <i class="fa-solid fa-house"></i>
                            <div><strong>Landing Page</strong><span>Public-facing entry point with submission &amp; tracking</span></div>
                        </div>
                        <div class="showcase-item">
                            <i class="fa-solid fa-gauge-high"></i>
                            <div><strong>Dashboard</strong><span>Real-time operational overview for admins</span></div>
                        </div>
                        <div class="showcase-item">
                            <i class="fa-solid fa-folder-open"></i>
                            <div><strong>File Management</strong><span>Create, view, and organize all files</span></div>
                        </div>
                        <div class="showcase-item">
                            <i class="fa-solid fa-users"></i>
                            <div><strong>User Management</strong><span>Manage accounts, roles, and designations</span></div>
                        </div>
                        <div class="showcase-item">
                            <i class="fa-solid fa-building"></i>
                            <div><strong>Department Management</strong><span>Configure departments and structure</span></div>
                        </div>
                        <div class="showcase-item">
                            <i class="fa-solid fa-truck-fast"></i>
                            <div><strong>Transfer Requests</strong><span>Review, approve, or reject transfers</span></div>
                        </div>
                        <div class="showcase-item">
                            <i class="fa-solid fa-timeline"></i>
                            <div><strong>Timeline Tracking</strong><span>Full historical audit trail per file</span></div>
                        </div>
                        <div class="showcase-item">
                            <i class="fa-solid fa-chart-pie"></i>
                            <div><strong>Analytics Dashboard</strong><span>Visual insight into system-wide activity</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4" data-aos="fade-up">
                <div class="col-md-6">
                    <div class="desktop-mockup">
                        <div class="desktop-screen">
                            <div class="mock-header">
                                <span class="mock-dot" style="background:#ff5f57;"></span>
                                <span class="mock-dot" style="background:#febc2e;"></span>
                                <span class="mock-dot" style="background:#28c840;"></span>
                                <span class="ms-2">File Management</span>
                            </div>
                            <div class="mock-screen-body-simple">
                                <div class="mock-table-row header-row"><span>File No.</span><span>Department</span><span>Status</span></div>
                                <div class="mock-table-row"><span>FTS-0451</span><span>Finance</span><span class="badge-soft success">Approved</span></div>
                                <div class="mock-table-row"><span>FTS-0452</span><span>HR</span><span class="badge-soft warning">Pending</span></div>
                                <div class="mock-table-row"><span>FTS-0453</span><span>Legal</span><span class="badge-soft info">In Review</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="desktop-mockup">
                        <div class="desktop-screen">
                            <div class="mock-header">
                                <span class="mock-dot" style="background:#ff5f57;"></span>
                                <span class="mock-dot" style="background:#febc2e;"></span>
                                <span class="mock-dot" style="background:#28c840;"></span>
                                <span class="ms-2">Analytics Dashboard</span>
                            </div>
                            <div class="mock-screen-body-simple">
                                <div class="mock-chart-block small">
                                    <div class="mock-chart-bars">
                                        <span style="height:30%;"></span>
                                        <span style="height:55%;"></span>
                                        <span style="height:75%;"></span>
                                        <span style="height:45%;"></span>
                                        <span style="height:85%;"></span>
                                    </div>
                                </div>
                                <div class="mock-row mt-3">
                                    <div class="mock-stat"><strong>312</strong><span>Total Files</span></div>
                                    <div class="mock-stat"><strong>09</strong><span>Departments</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- WHY CHOOSE US -->
    <!-- ============================================================ -->
    <section class="section-padding bg-light-soft" id="why">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow eyebrow-cyan"><i class="fa-solid fa-award"></i> Our Advantage</span>
                <h2 class="section-title">Why Choose Our System</h2>
                <p class="section-subtitle mx-auto">Designed to bring clarity, speed, and accountability to organizational file handling.</p>
            </div>

            <div class="row g-4">
                @php
                $why = [
                ['icon' => 'fa-bolt', 'title' => 'Faster File Processing', 'desc' => 'Automated routing cuts down manual delays and bottlenecks.'],
                ['icon' => 'fa-eye', 'title' => 'Complete Transparency', 'desc' => 'Every action on a file is visible and traceable in real time.'],
                ['icon' => 'fa-recycle', 'title' => 'Reduced Paperwork', 'desc' => 'Go fully digital and minimize dependency on physical files.'],
                ['icon' => 'fa-chart-line', 'title' => 'Improved Accountability', 'desc' => 'Clear ownership at every stage keeps teams responsible.'],
                ['icon' => 'fa-handshake', 'title' => 'Department Coordination', 'desc' => 'Streamlined communication between departments.'],
                ['icon' => 'fa-binoculars', 'title' => 'Better Monitoring', 'desc' => 'Live dashboards keep administrators fully informed.'],
                ['icon' => 'fa-shield-halved', 'title' => 'Secure Workflow', 'desc' => 'Every step is protected with role-based safeguards.'],
                ['icon' => 'fa-gears', 'title' => 'Easy Administration', 'desc' => 'Simple, intuitive tools for managing the entire system.'],
                ];
                @endphp
                @foreach ($why as $i => $item)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 50 }}">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid {{ $item['icon'] }}"></i></div>
                        <div>
                            <h6>{{ $item['title'] }}</h6>
                            <p>{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ============================================================ -->
    <!-- TESTIMONIALS SECTION -->
    <!-- ============================================================ -->
    <section class="section-padding" id="testimonials">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow"><i class="fa-solid fa-quote-left"></i> What People Say</span>
                <h2 class="section-title">Trusted Across Institutions</h2>
                <p class="section-subtitle mx-auto">Feedback from the kinds of organizations this system is built for.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="testimonial-card">
                        <i class="fa-solid fa-quote-left quote-mark"></i>
                        <p>"File movement across our departments used to take days of manual follow-up. With this system, every transfer is logged and approvals happen within hours instead of days."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar"><i class="fa-solid fa-landmark"></i></div>
                            <div>
                                <strong>D. Mehta</strong>
                                <span>Administrative Officer, Government Office</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <i class="fa-solid fa-quote-left quote-mark"></i>
                        <p>"Our registrar's office handles thousands of student files every semester. The role-based access and timeline tracking have made accountability so much easier to maintain."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar"><i class="fa-solid fa-graduation-cap"></i></div>
                            <div>
                                <strong>Dr. S. Iyer</strong>
                                <span>Registrar, University Administration</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <i class="fa-solid fa-quote-left quote-mark"></i>
                        <p>"The cross-department approval workflow eliminated the back-and-forth emails we used to deal with. Everything is transparent, searchable, and auditable now."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar"><i class="fa-solid fa-building"></i></div>
                            <div>
                                <strong>K. Nair</strong>
                                <span>Operations Head, Corporate Department</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- CALL TO ACTION -->
    <!-- ============================================================ -->
    <section class="section-padding" id="cta">
        <div class="container">
            <div class="cta-banner" data-aos="zoom-in">
                <h2>Transform Your File Management Process Today</h2>
                <p>Digitize file tracking, improve accountability, and streamline departmental workflows.</p>
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn-fts-light"><i class="fa-solid fa-gauge-high me-2"></i>Go to Dashboard</a>
                    @else
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-fts-cyan"><i class="fa-solid fa-rocket me-2"></i>Get Started</a>
                    @endif
                    <a href="{{ route('login') }}" class="btn-fts-light"><i class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                    @endauth
                    @else
                    <a href="#" class="btn-fts-cyan"><i class="fa-solid fa-rocket me-2"></i>Get Started</a>
                    <a href="#" class="btn-fts-light"><i class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                    @endif
                    <a href="#submit" class="btn-fts-ghost"><i class="fa-solid fa-file-arrow-up me-2"></i>Submit Document</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- FOOTER -->
    <!-- ============================================================ -->
    <footer class="footer-fts" id="contact">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <span class="brand-icon"><i class="fa-solid fa-folder-tree"></i></span>
                        File Tracking System
                    </div>
                    <p class="footer-about-text">A secure, role-based platform enabling organizations to create, manage, track, and transfer files across departments with complete audit history.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="social-icon-fts"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon-fts"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="social-icon-fts"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon-fts"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6>About</h6>
                    <ul>
                        <li><a href="#home">Overview</a></li>
                        <li><a href="#workflow">How It Works</a></li>
                        <li><a href="#roles">User Roles</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6>Features</h6>
                    <ul>
                        <li><a href="#features">Role-Based Access</a></li>
                        <li><a href="#workflow">Transfer Workflow</a></li>
                        <li><a href="#security">Audit Trail</a></li>
                        <li><a href="#track">File Tracking</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6>Services</h6>
                    <ul>
                        <li><a href="#submit">Document Submission</a></li>
                        <li><a href="#showcase">Dashboard Analytics</a></li>
                        <li><a href="#security">Security &amp; Compliance</a></li>
                        <li><a href="#">Implementation Support</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6>Contact</h6>
                    <ul>
                        <li><i class="fa-solid fa-location-dot me-2"></i>Your Organization Address, City</li>
                        <li><i class="fa-solid fa-envelope me-2"></i>support@filetrackingsystem.com</li>
                        <li><i class="fa-solid fa-phone me-2"></i>+91 00000 00000</li>
                    </ul>
                </div>
            </div>

            <div class="footer-legal-row">
                <a href="#">Privacy Policy</a>
                <span class="legal-dot">•</span>
                <a href="#">Terms &amp; Conditions</a>
            </div>

            <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center gap-2">
                <span>&copy; <span id="currentYear">2026</span> File Tracking &amp; Department Management System. All Rights Reserved.</span>
                <span>Built with Laravel, MySQL &amp; Bootstrap 5</span>
            </div>
        </div>
    </footer>

    <!-- Scroll to top -->
    <button class="scroll-top-btn" id="scrollTopBtn" aria-label="Scroll to top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        /* ============================================================
   FILE TRACKING & DEPARTMENT MANAGEMENT SYSTEM
   Landing Page JavaScript
   ============================================================ */

        document.addEventListener('DOMContentLoaded', function() {

            /* ---------------------------------------------------------
               Initialize AOS (Animate On Scroll)
            --------------------------------------------------------- */
            if (window.AOS) {
                AOS.init({
                    duration: 700,
                    easing: 'ease-out-cubic',
                    once: true,
                    offset: 60,
                });
            }

            /* ---------------------------------------------------------
               Footer current year
            --------------------------------------------------------- */
            var yearEl = document.getElementById('currentYear');
            if (yearEl) {
                yearEl.textContent = new Date().getFullYear();
            }

            /* ---------------------------------------------------------
               Navbar scroll effect + scroll-to-top visibility
            --------------------------------------------------------- */
            var navbar = document.getElementById('mainNavbar');
            var scrollTopBtn = document.getElementById('scrollTopBtn');

            function handleScroll() {
                if (window.scrollY > 30) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }

                if (window.scrollY > 400) {
                    scrollTopBtn.classList.add('show');
                } else {
                    scrollTopBtn.classList.remove('show');
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll();

            if (scrollTopBtn) {
                scrollTopBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

            /* ---------------------------------------------------------
               Collapse mobile navbar after a nav link is clicked
            --------------------------------------------------------- */
            document.querySelectorAll('#navbarMain .nav-link').forEach(function(link) {
                link.addEventListener('click', function() {
                    var navbarCollapse = document.getElementById('navbarMain');
                    if (navbarCollapse.classList.contains('show') && window.bootstrap) {
                        var bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, {
                            toggle: false
                        });
                        bsCollapse.hide();
                    }
                });
            });

            /* ---------------------------------------------------------
               Animated counters for statistics section
            --------------------------------------------------------- */
            var counters = document.querySelectorAll('.stat-number');

            function animateCounter(el) {
                var target = parseInt(el.getAttribute('data-count'), 10) || 0;
                var suffix = el.getAttribute('data-suffix') || '';
                var duration = 1400;
                var startTime = null;

                function update(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    var elapsed = currentTime - startTime;
                    var progress = Math.min(elapsed / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
                    var value = Math.floor(eased * target);
                    el.textContent = value + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(update);
                    } else {
                        el.textContent = target + suffix;
                    }
                }
                requestAnimationFrame(update);
            }

            if (counters.length && 'IntersectionObserver' in window) {
                var counterObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.4
                });

                counters.forEach(function(el) {
                    counterObserver.observe(el);
                });
            } else {
                // Fallback: animate immediately if IntersectionObserver unsupported
                counters.forEach(animateCounter);
            }

            /* ---------------------------------------------------------
               Drag & Drop file upload (Public Submission Portal)
            --------------------------------------------------------- */
            var dropzone = document.getElementById('dropzone');
            var fileInput = document.getElementById('fileInput');
            var dropzoneContent = document.getElementById('dropzoneContent');

            if (dropzone && fileInput) {
                dropzone.addEventListener('click', function() {
                    fileInput.click();
                });

                ['dragenter', 'dragover'].forEach(function(evt) {
                    dropzone.addEventListener(evt, function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        dropzone.classList.add('drag-active');
                    });
                });

                ['dragleave', 'drop'].forEach(function(evt) {
                    dropzone.addEventListener(evt, function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        dropzone.classList.remove('drag-active');
                    });
                });

                dropzone.addEventListener('drop', function(e) {
                    var files = e.dataTransfer.files;
                    if (files && files.length) {
                        fileInput.files = files;
                        updateDropzoneLabel(files[0]);
                    }
                });

                fileInput.addEventListener('change', function() {
                    if (fileInput.files && fileInput.files.length) {
                        updateDropzoneLabel(fileInput.files[0]);
                    }
                });

                function updateDropzoneLabel(file) {
                    if (!dropzoneContent) return;
                    dropzoneContent.innerHTML =
                        '<div class="cloud-upload-icon"><i class="fa-solid fa-file-circle-check"></i></div>' +
                        '<p class="mb-1"><strong>' + escapeHtml(file.name) + '</strong></p>' +
                        '<span class="dropzone-hint">' + (file.size / 1024).toFixed(1) + ' KB selected — click to change</span>';
                }

                function escapeHtml(str) {
                    var div = document.createElement('div');
                    div.textContent = str;
                    return div.innerHTML;
                }
            }

            /* ---------------------------------------------------------
               Public Document Submission Form (front-end demo behavior)
               NOTE: This is a presentational placeholder. Wire this up
               to a real Laravel route (e.g. POST /documents/submit) for
               production use.
            --------------------------------------------------------- */
            var publicSubmitForm = document.getElementById('publicSubmitForm');
            var submitSuccess = document.getElementById('submitSuccess');
            var generatedTrackingNumber = document.getElementById('generatedTrackingNumber');

            if (publicSubmitForm) {
                publicSubmitForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    if (!publicSubmitForm.checkValidity()) {
                        publicSubmitForm.classList.add('was-validated');
                        return;
                    }

                    var year = new Date().getFullYear();
                    var randomId = Math.floor(10000 + Math.random() * 89999);
                    var trackingNumber = 'FTS-' + year + '-' + randomId;

                    if (generatedTrackingNumber) {
                        generatedTrackingNumber.textContent = trackingNumber;
                    }
                    if (submitSuccess) {
                        submitSuccess.classList.remove('d-none');
                        submitSuccess.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                });
            }

            /* ---------------------------------------------------------
               File Tracking Lookup (front-end demo behavior)
               NOTE: This is a presentational placeholder. Wire this up
               to a real Laravel route (e.g. GET /track/{number}) for
               production use.
            --------------------------------------------------------- */
            var trackForm = document.getElementById('trackForm');
            var trackingResultCard = document.getElementById('trackingResultCard');

            if (trackForm && trackingResultCard) {
                trackForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    trackingResultCard.style.display = 'none';
                    // Force reflow for re-trigger of a simple fade
                    void trackingResultCard.offsetWidth;
                    trackingResultCard.style.display = 'block';
                    trackingResultCard.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                });
            }

        });
    </script>
</body>

</html>