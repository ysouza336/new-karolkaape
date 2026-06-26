  
   <footer class="footer">

    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <h3>Karolkaape Interiores</h3>
                <p>
                    Transformando ambientes em experiências únicas.
                </p>
            </div>

            <div class="footer-links">
                <h4>Navegação</h4>
                <ul>
                    <li>
                        <a href="<?= BASE_URL ?>/">Home</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/projetos">Projetos</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/contato">Contato</a>
                    </li>
                </ul>
            </div>

            <div class="footer-contato">
                <h4>Contato</h4>
                <p>
                    contato@karolkaape.com.br
                </p>
                <p>
                    São Paulo - SP
                </p>
            </div>
            <div class="footer-social">
                <h4>Redes Sociais</h4>
                <div class="social-icons">
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                © <?= date('Y') ?> Karolkaape Interiores. Todos os direitos reservados.
            </p>
        </div>

    </div>

</footer>


    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    

    <script>
    AOS.init({

        duration:800,
        once:true

    });
    </script>
    <script>
        new PureCounter();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
    <script>Fancybox.bind("[data-fancybox]");</script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/menu.js"></script>
    
    
</body>
</html>