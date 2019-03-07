
<div class="ui ordered attached steps width100">
    <div class="active step">
        <div class="content">
            <div class="title">Informations </br>
                personnelles</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Formations</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Expériences</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Compétences </br>
                techniques</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Langues</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Certifications</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Savoir-être</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Réseaux </br>
                sociaux</div>
        </div>
    </div>
    <div class="disabled step">
        <div class="content">
            <div class="title">Centres </br>
                d'intêret</div>
        </div>
    </div>
</div>

<div class="ui attached segment">
    <div class="ui middle aligned center aligned margin50">
        <div class="column">
        <h1 class="title">Infos Personnelles</h1>

        <?= form_open('', 'class = "ui huge form"'); ?>

        <div class="ui stacked segment">

            <div class="field">
                <label>Date de naissance</label>
                <div class="ui left input">
                    <?= form_input($birthday); ?>
                </div>
            </div>

            <div class="field">
                <label>Sexe</label>
                <?= form_dropdown('gender', $gender, '', 'class="ui selection dropdown" id="gender"'); ?>
            </div>

            <div class="field">
                <label>Adresse</label>
                <div class="ui left input">
                    <?= form_input('address', set_value('address'), 'placeholder ="N° + Rue"'); ?>
                </div>
            </div>

            <div class="field">
                <div class="ui left input">
                    <?= form_input('postalcode', set_value('postalcode'), 'placeholder ="Code Postal"'); ?>
                </div>
            </div>

            <div class="field">
                <div class="ui left input">
                    <?= form_input('city', set_value('city'), 'placeholder ="Ville"'); ?>
                </div>
            </div>

            <div class="field">
                <label>Téléphone</label>
                <div class="ui left input">
                    <?= form_input('portable', set_value('portable'), 'placeholder ="Portable"'); ?>
                </div>
            </div>

            <div class="field">
                <label>Permis</label>
                <?= form_multiselect('permis', $permis, '', 'class="ui fluid normal dropdown"'); ?>
            </div>

            <div class="inline fields">
                <label for="vehicle">Véhicule personnel</label>
                <div class="field">
                    <div class="ui slider checkbox">
                        <?= form_checkbox('vehicle', '1', FALSE, 'class="hidden"'); ?>
                    </div>
                </div>
            </div>

            <div class="field">
                <label>A propos de moi</label>
                <div class="ui left input">
                    <?= form_textarea('bio', set_value('bio'), 'placeholder="Ecrivez un résumé sur vous, vos aspirations, ect..."'); ?>
                </div>
            </div>

            <div class="field">
                <label>Site / Blog / Portfolio</label>
                <div class="ui labeled input">
                    <div class="ui label">
                        https://
                    </div>
                    <?= form_input('portfolio', set_value('portfolio'), 'placeholder="monsite.com"'); ?>
                </div>
            </div>

            <div class="field">
                <label>Autres</label>
                <div class="ui left input">
                    <?= form_textarea('more', set_value('more'), 'placeholder="Autres liens, informations à propos de vous,..."'); ?>
                </div>
            </div>

            <?= form_submit('submitted', 'Etape suivante', 'class="ui teal big button"'); ?>

            <div class="ui error message"></div>

        </div>

        <?= form_close(); ?>
        </div>
    </div>
</div>


<script>

    $(document)
        .ready(function() {

            $('.ui.normal.dropdown')
                .dropdown({
                    maxSelections: 6
                })

            $('#gender')
                .dropdown()
            ;

            $('.ui.slider.checkbox')
                .checkbox()
            ;

            $('.ui.form')
                .form({
                    fields: {
                        address: {
                            identifier: 'address',
                            rules: [
                                {
                                    type   : 'maxLength[70]',
                                    prompt : 'Votre adresse est trop longue (70 caractères maximum).'
                                }
                            ]
                        },
                        postalcode: {
                            identifier: 'postalcode',
                            rules: [
                                {
                                    type   : 'maxLength[5]',
                                    prompt : 'Veulliez un code postal à 5 chiffres maximum.'
                                },
                                {
                                    type   : 'number',
                                    prompt : 'Veulliez entrer un code postal sous forme de nombre.'
                                }
                            ]
                        },
                        city: {
                            identifier: 'city',
                            rules: [
                                {
                                    type   : 'maxLength[70]',
                                    prompt : 'Le nom de votre ville est trop long (70 caractères maximum).'
                                }
                            ]
                        },
                        portable: {
                            identifier: 'portable',
                            rules: [
                                {
                                    type   : 'maxLength[10]',
                                    prompt : 'Votre numéro de téléphone est trop long (10 caractères maximum).'
                                },
                                {
                                    type   : 'number',
                                    prompt : 'Votre numéro de téléphone doit être composé de chiffres.'
                                }
                            ]
                        },
                        bio: {
                            identifier: 'bio',
                            rules: [
                                {
                                    type   : 'maxLength[255]',
                                    prompt : 'Votre texte est trop long (255 caractères maximum).'
                                }
                            ]
                        },
                        portfolio: {
                            identifier: 'portfolio',
                            rules: [
                                {
                                    type   : 'maxLength[255]',
                                    prompt : 'Votre lien est trop long (255 caractères maximum).'
                                }
                            ]
                        },
                        more: {
                            identifier: 'more',
                            rules: [
                                {
                                    type   : 'maxLength[255]',
                                    prompt : 'Votre texte est trop long (255 caractères maximum).'
                                }
                            ]
                        }
                    }
                })
            ;
        })
    ;
    
</script>