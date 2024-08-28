    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav ul');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        });
    </script>

<script src="<?= baseUrl('assets/js/main.js') ?>"></script>
</body>

</html>