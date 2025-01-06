const settingsBtn = document.getElementById('settings-btn'); // زر Settings (Profile)
const sidebar = document.getElementById('sidebar'); // الشريط الجانبي
const closeBtn = document.getElementById('close-btn'); // زر الإغلاق داخل الشريط الجانبي


// إظهار الشريط الجانبي عند النقر على زر Settings (Profile)
if (settingsBtn) {
    settingsBtn.addEventListener('click', (event) => {
        event.preventDefault(); // منع السلوك الافتراضي للرابط
        sidebar.classList.add('active');
    });
}


// إخفاء الشريط الجانبي عند النقر على زر الإغلاق
if (closeBtn) {
    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });
}

