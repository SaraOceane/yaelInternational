
    @include('include.header')
    <style>
        body {
            background: linear-gradient(to bottom, #aacbff, #ffffff); /* Fond avec un dégradé de bleu et de blanc */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .form-container {
            width: 600px;
            padding: 20px;

            border: 1px solid #ced4da;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background-color: #f8f9fa; /* Fond blanc pour le formulaire */
        }
        .form-title {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            text-decoration: underline;
            margin-bottom: 20px;
            white-space: nowrap; /* Empêche le titre de se diviser sur plusieurs lignes */
        }
        .form-subtitle {
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }
        .form-field {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-field label {

        }
        .form-field input {
            flex: 1;
            margin-left: 10px;
        }
        .form-field input[type="checkbox"] {
            width: auto;
            margin-left: 0;
        }

        .buttons-container{
            display: flex;
            justify-content: space-between;
            margin-top: 20px;/* Ajoute un espace au-dessus des boutons pour l'esthétique */
        }

        .btn-primary {
            display: block;
            margin-left: auto;
            font-size : 20px;
            font-weight: lighter;
            color: #fff;
            padding: 10px 12px;
            background: #2a4fbb;
            outline: none;
            border: none;
            cursor: pointer;
            border-radius:20px;
            position: relative;
            box-shadow: 0 6px #1e3a8a;
        }

        .btn-primary:active{
            box-shadow: 0 0 #efa424;
            top: 6px;
        }
        .btn-secondary {
            display: block;
            margin-left: 0;
            font-size : 20px;
            font-weight: lighter;
            color: #fff;
            padding: 10px 12px;
            background: #2a4fbb;
            outline: none;
            border: none;
            cursor: pointer;
            border-radius:20px;
            position: relative;
            box-shadow: 0 6px #1e3a8a;
        }

        .btn-secondary:active{
            box-shadow: 0 0 #efa424;
            top: 6px;
        }
    </style>
</head>
<body>
    <div class="form-container">



            <div class="form-field">
                <div>
                    <label for="loyer">Loyer mensuel</label>
                    <input type="text" class="form-control" id="loyer">
                </div>
                <div>
                    <label for="loyer">Durée du bail</label>
                    <input type="text" class="form-control" id="duree_bail">
                </div>
                <div>
                    <label for="lot">Lot/Ilot/Section/Parcelle</label>
                    <input type="text" class="form-control" id="lot">
                </div>
            </div>

            <div class="form-field">
                <label  for="ville">Ville/Commune/Rue/Quartier/Immeuble ou villa</label>

            </div>

            <div class="form-field">
                <input type="text" class="form-control" id="ville" style="width: 100%;">
            </div>

            <div class="form-field">
                <div>
                    <label for="titre_foncier">N° du titre foncier</label>
                    <input type="text" class="form-control" id="titre_foncier">
                </div>
                <div>
                    <label for="adresse_postale">Contact/Adresse postale</label>
                    <input type="text" class="form-control" id="adresse_postale">
                </div>
            </div>




            <div class="form-field">
                <div>
                    <label for="chiffres_affaire">Chiffres d'affaire prévisionnelle en FCFA</label>
                    <input type="text" class="form-control" id="chiffres_affaire">
                </div>
                <div>
                    <label for="regime_imposition">Régime d'imposition</label>
                    <input type="text" class="form-control" id="regime_imposition">
                </div>
            </div>



        <h4> Date d'embauche du premier employé</h4>

        <div class="form-field">
            <input type="date" class="form-control" id="date">
        </div>

        <h4> Gérant(s): nom et prénoms; date et lieu de naissance; résidence; type
        de pièces; n° de pièce; Email; n° tel :</h4>

        <div class="form-field">
            <input type="text" class="form-control" id="gerant">
        </div>

        <h4> Avez-vous déjà réalisé une étude de faisabilité?</h4>

        <div class="form-field">
            <select class="form-control" id="etude_faisabilite">
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
        </div>

        <h4>Informations complémentaires</h4>

        <div class="form-field">
            <input type="text" class="form-control" id="gerant">
        </div>
        <div class="form-field">
                <div>
                    <label for="montant_regle">Montant réglé</label>
                    <input type="text" class="form-control" id="montant_regle">
                </div>
                <div>
                    <label for="reste_a_payer">Reste à payer</label>
                    <input type="text" class="form-control" id="reste_a_payer">
                </div>
            </div>


        <div class="buttons-container">
            <button type="button" class="btn btn-secondary" onclick="redirectToPreviousPage()">Précédent</button>
            <button type="button" class="btn btn-primary">Soumettre</button>
        </div>
    </div>

    <script>
        function redirectToPreviousPage() {
            window.location.href = "formulaire";
        }
    </script>

    

    <form action="" method="post"></form>
</body>
@include('include.footer')

