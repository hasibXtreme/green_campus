<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ক্লিন ক্যাম্পাস, গ্রীন ক্যাম্পাস – ক্যাম্পাস অ্যাম্বাসেডর রেজিস্ট্রেশন | Scrap Venture</title>
    <meta name="description" content="Scrap Venture কর্তৃক আয়োজিত ক্লিন ক্যাম্পাস, গ্রীন ক্যাম্পাস প্রোগ্রামের জন্য ৫ম থেকে ১০ম শ্রেণির শিক্ষার্থীদের জন্য ক্যাম্পাস অ্যাম্বাসেডর নিবন্ধন পেজ।">
    
    <!-- Google Fonts: Hind Siliguri (Bangla) & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --primary-green: #059669;
            --primary-hover: #047857;
            --dark-green: #064e3b;
            --light-green: #ecfdf5;
            --mint-border: #a7f3d0;
            --mint-accent: #34d399;
            --text-main: #0f172a;
            --text-muted: #475569;
            --card-bg: rgba(255, 255, 255, 0.96);
            --danger: #ef4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Hind Siliguri', 'Plus Jakarta Sans', sans-serif;
        }

        body {
            min-height: 100vh;
            background: radial-gradient(circle at 10% 20%, #d1fae5 0%, #ecfdf5 45%, #f0fdf4 90%);
            color: var(--text-main);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2.5rem 1rem;
            position: relative;
            overflow-x: hidden;
        }

        /* Decorative Leaf Background Elements */
        body::before {
            content: '';
            position: absolute;
            top: -100px;
            left: -100px;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.18) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
            z-index: 0;
        }

        body::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(5, 150, 105, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .container {
            width: 100%;
            max-width: 650px;
            z-index: 1;
        }

        /* Header Card */
        .brand-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .brand-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #ffffff;
            color: var(--dark-green);
            padding: 0.5rem 1.25rem;
            border-radius: 9999px;
            font-weight: 700;
            font-size: 0.95rem;
            box-shadow: 0 4px 15px rgba(5, 150, 105, 0.12);
            border: 1px solid var(--mint-border);
            margin-bottom: 1rem;
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .brand-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(5, 150, 105, 0.18);
        }

        .brand-badge i {
            color: var(--primary-green);
            font-size: 1.1rem;
        }

        .main-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark-green);
            line-height: 1.3;
            margin-bottom: 0.5rem;
            letter-spacing: -0.01em;
        }

        .sub-title {
            font-size: 1.1rem;
            color: var(--primary-green);
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .target-tag {
            display: inline-block;
            background: rgba(5, 150, 105, 0.1);
            color: var(--dark-green);
            padding: 0.35rem 1rem;
            border-radius: 8px;
            font-size: 0.92rem;
            font-weight: 600;
            border: 1px dashed var(--mint-accent);
        }

        /* Main Form Card */
        .form-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(6, 78, 59, 0.08), 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        /* Banners */
        .alert-banner {
            padding: 1rem 1.25rem;
            border-radius: 14px;
            margin-bottom: 1.75rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            font-size: 0.98rem;
            font-weight: 500;
            line-height: 1.5;
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .alert-success {
            background: #f0fdf4;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-success i {
            color: #22c55e;
            font-size: 1.3rem;
            margin-top: 2px;
        }

        .alert-danger {
            background: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .alert-danger i {
            color: #ef4444;
            font-size: 1.3rem;
            margin-top: 2px;
        }

        /* Form Controls */
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.98rem;
            font-weight: 600;
            color: var(--dark-green);
            margin-bottom: 0.5rem;
        }

        .form-label span.req {
            color: var(--danger);
            margin-left: 3px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            color: #94a3b8;
            font-size: 1.05rem;
            pointer-events: none;
            transition: color 0.2s ease;
        }

        .form-control, .form-select {
            width: 100%;
            padding: 0.85rem 1rem 0.85rem 2.75rem;
            font-size: 1rem;
            color: var(--text-main);
            background: #ffffff;
            border: 1.5px solid #cbd5e1;
            border-radius: 12px;
            outline: none;
            transition: all 0.25s ease;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 4px rgba(5, 150, 105, 0.15);
            background: #ffffff;
        }

        .form-control:focus + .input-icon,
        .form-select:focus + .input-icon {
            color: var(--primary-green);
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%20059669'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1.2rem;
            padding-right: 2.75rem;
            cursor: pointer;
        }

        .error-message {
            color: var(--danger);
            font-size: 0.85rem;
            font-weight: 500;
            margin-top: 0.4rem;
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        /* Image Upload Area & Live Preview */
        .upload-card {
            border: 2px dashed var(--mint-border);
            background: var(--light-green);
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .upload-card:hover, .upload-card.dragover {
            border-color: var(--primary-green);
            background: #e6f4ea;
        }

        .file-input {
            display: none;
        }

        .upload-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.6rem;
        }

        .upload-icon-box {
            width: 56px;
            height: 56px;
            background: #ffffff;
            color: var(--primary-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 12px rgba(5, 150, 105, 0.12);
        }

        .upload-text {
            font-size: 0.98rem;
            font-weight: 600;
            color: var(--dark-green);
        }

        .upload-subtext {
            font-size: 0.82rem;
            color: var(--text-muted);
        }

        .upload-btn-label {
            display: inline-block;
            margin-top: 0.4rem;
            background: #ffffff;
            color: var(--primary-green);
            border: 1px solid var(--primary-green);
            padding: 0.4rem 1rem;
            border-radius: 8px;
            font-size: 0.88rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .upload-card:hover .upload-btn-label {
            background: var(--primary-green);
            color: #ffffff;
        }

        /* Image Preview Box */
        .image-preview-container {
            display: none;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .image-preview-box {
            position: relative;
            width: 130px;
            height: 130px;
            border-radius: 16px;
            overflow: hidden;
            border: 3px solid var(--primary-green);
            box-shadow: 0 8px 20px rgba(5, 150, 105, 0.2);
        }

        .image-preview-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-file-info {
            text-align: center;
        }

        .file-name {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--dark-green);
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .remove-img-btn {
            background: #fef2f2;
            color: var(--danger);
            border: 1px solid #fecaca;
            padding: 0.35rem 0.9rem;
            border-radius: 8px;
            font-size: 0.82rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            margin-top: 0.3rem;
        }

        .remove-img-btn:hover {
            background: var(--danger);
            color: #ffffff;
            border-color: var(--danger);
        }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            padding: 1rem;
            font-size: 1.15rem;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            border: none;
            border-radius: 14px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(5, 150, 105, 0.25);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            margin-top: 2rem;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 12px 25px rgba(5, 150, 105, 0.35);
            transform: translateY(-2px);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .btn-submit:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        /* Responsive */
        @media (max-width: 640px) {
            body {
                padding: 1.5rem 0.75rem;
            }

            .form-card {
                padding: 1.5rem 1.25rem;
                border-radius: 18px;
            }

            .main-title {
                font-size: 1.75rem;
            }

            .sub-title {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Branding & Title Header -->
        <header class="brand-header">
            <div class="brand-badge">
                <i class="fa-solid fa-leaf"></i>
                <span>Scrap Venture</span>
            </div>
            <h1 class="main-title">ক্লিন ক্যাম্পাস, গ্রীন ক্যাম্পাস</h1>
            <p class="sub-title">ক্যাম্পাস অ্যাম্বাসেডর রেজিস্ট্রেশন প্রোগ্রাম</p>
            <div class="target-tag">
                <i class="fa-solid fa-graduation-cap"></i> শুধুমাত্র ৫ম থেকে ১০ম শ্রেণির শিক্ষার্থীদের জন্য
            </div>
        </header>

        <!-- Main Form Card -->
        <main class="form-card">
            
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert-banner alert-success">
                    <i class="fa-solid fa-circle-check"></i>
                    <div>{{ session('success') }}</div>
                </div>
            @endif
            
            <!-- Error Message -->
            @if(session('error'))
                <div class="alert-banner alert-danger">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <div>{{ session('error') }}</div>
                </div>
            @endif

            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" id="ambassadorForm">
                @csrf
                
                <!-- 1. Student Name -->
                <div class="form-group">
                    <label class="form-label" for="name">
                        শিক্ষার্থীর নাম <span class="req">*</span>
                    </label>
                    <div class="input-wrapper">
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="আপনার পূর্ণ নাম লিখুন" required>
                        <i class="fa-solid fa-user input-icon"></i>
                    </div>
                    @error('name')
                        <div class="error-message"><i class="fa-solid fa-circle-xmark"></i> {{ $message }}</div>
                    @enderror
                </div>

                <!-- 2. Student ID -->
                <div class="form-group">
                    <label class="form-label" for="std_id">
                        শিক্ষার্থী আইডি <span class="req">*</span>
                    </label>
                    <div class="input-wrapper">
                        <input type="text" id="std_id" name="std_id" class="form-control" value="{{ old('std_id') }}" placeholder="আপনার রোল বা আইডি নম্বর লিখুন" required>
                        <i class="fa-solid fa-id-card input-icon"></i>
                    </div>
                    @error('std_id')
                        <div class="error-message"><i class="fa-solid fa-circle-xmark"></i> {{ $message }}</div>
                    @enderror
                </div>

                <!-- 3. Student Class (Dropdown 5th to 10th) -->
                <div class="form-group">
                    <label class="form-label" for="class">
                        শ্রেণি (৫ম থেকে ১০ম) <span class="req">*</span>
                    </label>
                    <div class="input-wrapper">
                        <select id="class" name="class" class="form-select" required>
                            <option value="" disabled {{ old('class') ? '' : 'selected' }}>আপনার শ্রেণি নির্বাচন করুন</option>
                            @foreach ([
                                '৫ম' => '৫ম শ্রেণি (Class 5)',
                                '৬ষ্ঠ' => '৬ষ্ঠ শ্রেণি (Class 6)',
                                '৭ম' => '৭ম শ্রেণি (Class 7)',
                                '৮ম' => '৮ম শ্রেণি (Class 8)',
                                '৯ম' => '৯ম শ্রেণি (Class 9)',
                                '১০ম' => '১০ম শ্রেণি (Class 10)'
                            ] as $val => $label)
                                <option value="{{ $val }}" {{ old('class') == $val ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        <i class="fa-solid fa-school input-icon"></i>
                    </div>
                    @error('class')
                        <div class="error-message"><i class="fa-solid fa-circle-xmark"></i> {{ $message }}</div>
                    @enderror
                </div>

                <!-- 4. School Name -->
                <div class="form-group">
                    <label class="form-label" for="school_name">
                        বিদ্যালয়ের নাম <span class="req">*</span>
                    </label>
                    <div class="input-wrapper">
                        <input type="text" id="school_name" name="school_name" class="form-control" value="{{ old('school_name') }}" placeholder="আপনার বিদ্যালয়ের পূর্ণ নাম লিখুন" required>
                        <i class="fa-solid fa-building-columns input-icon"></i>
                    </div>
                    @error('school_name')
                        <div class="error-message"><i class="fa-solid fa-circle-xmark"></i> {{ $message }}</div>
                    @enderror
                </div>

                <!-- 5. Student Photo Upload with Live Preview -->
                <div class="form-group">
                    <label class="form-label">
                        শিক্ষার্থীর ছবি আপলোড <span class="req">*</span>
                    </label>
                    
                    <div class="upload-card" id="dropZone" onclick="document.getElementById('photo_url').click();">
                        <input type="file" id="photo_url" name="photo_url" class="file-input" accept="image/png, image/jpeg, image/jpg, image/webp" required onchange="previewImage(this)">
                        
                        <!-- Upload Default Box -->
                        <div class="upload-placeholder" id="uploadPlaceholder">
                            <div class="upload-icon-box">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </div>
                            <div class="upload-text">ছবি নির্বাচন করুন অথবা ড্র্যাগ করে আনুন</div>
                            <div class="upload-subtext">অনুমোদিত ফরম্যাট: PNG, JPG, JPEG, WEBP (সর্বোচ্চ ২ MB)</div>
                            <span class="upload-btn-label"><i class="fa-regular fa-image"></i> ছবি বেছে নিন</span>
                        </div>

                        <!-- Image Preview Box -->
                        <div class="image-preview-container" id="previewContainer">
                            <div class="image-preview-box">
                                <img id="imagePreview" src="#" alt="Preview">
                            </div>
                            <div class="preview-file-info">
                                <div class="file-name" id="fileName">photo.jpg</div>
                                <button type="button" class="remove-img-btn" onclick="event.stopPropagation(); removeImage();">
                                    <i class="fa-solid fa-trash-can"></i> ছবি পরিবর্তন করুন
                                </button>
                            </div>
                        </div>
                    </div>

                    @error('photo_url')
                        <div class="error-message"><i class="fa-solid fa-circle-xmark"></i> {{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit" id="submitBtn">
                    <span>নিবন্ধন করুন</span>
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </main>

        <!-- Footer -->
        <footer class="footer-credits">
            <p>© 2026 <strong>Scrap Venture</strong> | পরিচ্ছন্ন ও সবুজ ক্যাম্পাস গঠনের অঙ্গীকার</p>
        </footer>
    </div>

    <!-- JavaScript for Live Image Preview and Drag/Drop -->
    <script>
        const fileInput = document.getElementById('photo_url');
        const uploadPlaceholder = document.getElementById('uploadPlaceholder');
        const previewContainer = document.getElementById('previewContainer');
        const imagePreview = document.getElementById('imagePreview');
        const fileName = document.getElementById('fileName');
        const dropZone = document.getElementById('dropZone');

        function previewImage(input) {
            const file = input.files[0];
            if (file) {
                // File size check (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert('ছবি সাইজ ২ MB এর চেয়ে বেশি হতে পারবে না।');
                    input.value = '';
                    removeImage();
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    fileName.textContent = file.name;
                    uploadPlaceholder.style.display = 'none';
                    previewContainer.style.display = 'flex';
                };
                reader.readAsDataURL(file);
            }
        }

        function removeImage() {
            fileInput.value = '';
            imagePreview.src = '#';
            fileName.textContent = '';
            previewContainer.style.display = 'none';
            uploadPlaceholder.style.display = 'flex';
        }

        // Drag and Drop Event Handlers
        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                dropZone.classList.add('dragover');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                dropZone.classList.remove('dragover');
            }, false);
        });

        dropZone.addEventListener('drop', (e) => {
            const dt = e.dataTransfer;
            const files = dt.files;
            if (files.length > 0) {
                fileInput.files = files;
                previewImage(fileInput);
            }
        }, false);

        // Form Submit Loading State
        document.getElementById('ambassadorForm').addEventListener('submit', function() {
            const btn = document.getElementById('submitBtn');
            btn.disabled = true;
            btn.innerHTML = `<span>জমা হচ্ছে...</span> <i class="fa-solid fa-spinner fa-spin"></i>`;
        });
    </script>
</body>
</html>