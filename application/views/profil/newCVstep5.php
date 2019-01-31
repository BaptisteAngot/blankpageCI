<div class="ui steps">
    <div class="active step">
        <div class="content">
            <div class="title">Informations</div>
            <div class="description">Parlez nous de vous</div>
        </div>
    </div>
    <div class="step">
        <div class="content">
            <div class="title">Formations</div>
            <div class="description">Entrez vos diff&eacute;rents dipl&ocirc;mes</div>
        </div>
    </div>
    <div class="step">
        <div class="content">
            <div class="title">Exp&eacute;riences</div>
            <div class="description">Vos exp&eacute;riences professionnelles</div>
        </div>
    </div>
</div>

<div class="ui middle aligned center aligned">
    <div class="column">
        <h1 class="title">Langues</h1>

        <?= form_open('', 'class = "ui huge form"'); ?>

        <div class="ui stacked segment">

            <div class="field">
                <label>Langue</label>
                <?= form_dropdown('name', $langue, '', 'class="ui fluid normal dropdown"'); ?>
            </div>


            <div class="field">
                <label>Niveau</label>
                <div class="ui left input">
                    <?= form_dropdown('niveau', $niveau, '', 'class="ui fluid selection dropdown" id="niveau"'); ?>
                </div>
            </div>

            <?= form_submit('submitted', 'Etape suivante', 'class="ui teal big button"'); ?>

        </div>

        <?php if (isset($_POST['submitted'])) {
            echo '<div class="ui error message" style="display:block;">' . validation_errors() . '</div>';
        } else {
            echo '<div class="ui error message">' . validation_errors() . '</div>';
        }; ?>

        <?= form_close(); ?>
    </div>
</div>





<script>

    $(document)
        .ready(function() {

            $('.ui.normal.dropdown')
                .dropdown({
                    maxSelections: 6
                })

            $('#niveau')
                .dropdown()
            ;

            $('.ui.radio.checkbox')
                .checkbox()
            ;
        })
    ;
</script>