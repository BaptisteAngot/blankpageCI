    <footer>

    </footer>

    <!-- Semantic UI -->
    <script href="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('semantic/dist/semantic.min.js'); ?>"></script>
    <script src="<?= base_url('semantic/dist/components/visibility.js'); ?>"></script>
    <script src="<?= base_url('semantic/dist/components/sidebar.js'); ?>"></script>
    <script src="<?= base_url('semantic/dist/components/transition.js'); ?>"></script>

    <!-- Menu fondu -->
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>

    </body>
</html>