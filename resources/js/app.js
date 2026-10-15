const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#primary-nav');

if (menuButton && navigation) {
    menuButton.addEventListener('click', () => {
        const expanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', String(!expanded));
        menuButton.setAttribute('aria-label', expanded ? 'Buka navigasi' : 'Tutup navigasi');
        navigation.classList.toggle('is-open', !expanded);
    });

    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menuButton.setAttribute('aria-expanded', 'false');
            menuButton.setAttribute('aria-label', 'Buka navigasi');
            navigation.classList.remove('is-open');
        });
    });
}

const consultationForm = document.querySelector('#consultation-form');

if (consultationForm) {
    const requiredFields = ['full-name', 'email-address', 'project-details'];
    const statusMessage = document.querySelector('#form-status');

    const validateField = (field) => {
        const errorMessage = document.querySelector(`[data-error-for="${field.id}"]`);
        let message = '';

        if (field.validity.valueMissing) {
            message = 'This field is required.';
        } else if (field.type === 'email' && field.validity.typeMismatch) {
            message = 'Enter a valid email address.';
        }

        field.setAttribute('aria-invalid', String(Boolean(message)));
        field.classList.toggle('border-[#c84d4d]', Boolean(message));
        field.classList.toggle('focus:border-[#c84d4d]', Boolean(message));
        field.classList.toggle('focus:ring-[#c84d4d]/10', Boolean(message));

        if (errorMessage) {
            errorMessage.textContent = message;
            errorMessage.classList.toggle('hidden', !message);
        }

        return !message;
    };

    requiredFields.forEach((id) => {
        const field = document.getElementById(id);

        field?.addEventListener('input', () => {
            validateField(field);
            statusMessage?.classList.add('hidden');
        });
    });

    consultationForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const fields = requiredFields.map((id) => document.getElementById(id)).filter(Boolean);
        const isValid = fields.map(validateField).every(Boolean);

        if (!isValid) {
            statusMessage.textContent = 'Periksa kembali nama, email, dan detail proyek yang wajib diisi.';
            statusMessage.classList.remove('hidden');
            fields.find((field) => field.getAttribute('aria-invalid') === 'true')?.focus();
            return;
        }

        statusMessage.textContent = 'Form ini masih berupa demo frontend dan belum mengirim data. Untuk menghubungi Net FusionID, silakan gunakan Instagram resmi @netfusionid.';
        statusMessage.classList.remove('hidden');
    });
}
