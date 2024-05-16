@include('include.header')
    <style>
        body {
            background: linear-gradient(to bottom, #aacbff, #ffffff); /* Fond avec un dégradé de bleu et de blanc */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding-top: 50px;
            padding-bottom: 50px;
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
            color: #020202; /* Bleu foncé pour les titres */
            white-space: nowrap; /* Empêche le titre de se diviser sur plusieurs lignes */
        }
        .form-subtitle {
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
            color: #1e3a8a; /* Bleu foncé pour les sous-titres */
        }
        .form-field {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-field label {
            color: #555; /* Gris clair pour les étiquettes */
        }
        .form-field input {
            flex: 1;
            margin-left: 10px;
            border: 1px solid #ccc; /* Bordure grise pour les champs de saisie */
            border-radius: 5px; /* Coins arrondis pour les champs de saisie */
            padding: 8px; /* Espacement interne des champs de saisie */
            overflow-wrap: break-word;
        }
        
        .btn-primary {
            display: block;
            margin-top: 20px;
            font-size: 18px;
            font-weight: lighter;
            color: #fff;
            padding: 10px 20px;
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

        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .section {
            max-width: 800px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px;
            text-align: center;
            display: none;
        }
        .section.active {
            display: block;
        }
        .section h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #007bff;
        }
        .section h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }
        .section p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #495057;
        }
        .section .icon {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 20px;
        }
        .section .feature {
            margin-bottom: 20px;
        }
        .section .feature i {
            margin-right: 10px;
            color: #007bff;
        }
        
    
    </style>
</head>
<body>
    <div class="container">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
            
        @endif

        <form action="/traitement_formulaire" method="post">

            <div class="section active">
                <h1>Ce qu'il faut savoir</h1>
                <p>Il y a deux types de formes juridiques: les EI(Entreprises Individuelles) et les SARL(Sociétés A Responsabilité Limitée).</p>
                <button class="btn btn-primary btn-next">Suivant</button>
            </div>
            <div class="section">
                <h2>Entreprise Individuelle (EI)</h2>
                <p>Une Entreprise Individuelle est une entreprise exploitée par une seule personne physique. 
                La personnalité d'une entreprise individuelle correspond à celle du propriétaire ; le patrimoine 
                privé du propriétaire est confondu avec son patrimoine professionnel.</p>
                <div class="feature">
                    <i class="fas fa-user"></i> Propriété individuelle
                </div>
                <div class="feature">
                    <i class="fas fa-money-bill-wave"></i> Responsabilité illimitée
                </div>
                <button class="btn btn-primary btn-next">Suivant</button>
            </div>
            <div class="section">
                <h2>Société à Responsabilité Limitée (SARL)</h2>
                <p>Une Société à Responsabilité Limitée (SARL) est une forme juridique d'entreprise dans laquelle 
                la responsabilité des associés est limitée au montant de leurs apports initiaux. En d'autres termes,
                les associés ne sont pas personnellement responsables des dettes de la société au-delà de leur 
                investissement initial.</p>
                <p>Dans une SARL, les biens de l'entreprise sont distincts des biens personnels des associés. 
                Pour constituer une SARL, il est nécessaire de déclarer un capital social et de rédiger des statuts.
                Une SARL peut être unipersonnelle, dans ce cas l'associé unique détient l'intégralité des parts sociales,
                ou pluripersonnelle, avec plusieurs associés détenant des parts sociales proportionnelles à leurs apports
                respectifs.</p>
                <div class="feature">
                    <i class="fas fa-users"></i> Associés limités
                </div>
                <div class="feature">
                    <i class="fas fa-handshake"></i> Contrat de société
                </div>
                <button class="btn btn-primary btn-next ">Suivant</button>
            </div>

            <div class="section">
                <h2>Choix du type d'entreprise</h2>
                <p>Quel type d'entreprise souhaitez-vous créer?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeEntreprise" id="eiRadio" value="ei">
                    <label class="form-check-label" for="eiRadio">
                    Entreprise Individuelle (EI)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeEntreprise" id="sarlRadio" value="sarl">
                    <label class="form-check-label" for="sarlRadio">
                    Société à Responsabilité Limitée (SARL)
                    </label>
                </div>
                <button class="btn btn-primary btn-next">Valider</button>
            </div>

            <div class="form-container section">
                <h2 class="form-title">PROCEDURE DE CREATION D'ENTREPRISE</h2>
                <h3 class="form-subtitle">INFORMATIONS REQUISES</h3>
        
        
                <h4> Dénomination et forme juridique</h4>
        
                <div class="form-field">
                    <div>
                        <label for="denomination">Dénomination</label>
                        <input type="text" class="form-control" id="denomination">
                    </div>
                    <div>
                        <label for="forme_juridique">Forme_juridique</label>
                        <input type="text" class="form-control" id="forme_juridique">
                    </div>
                </div>
        
                <h4> Sigle usuel et enseigne</h4>
        
                <div class="form-field">
                    <div>
                        <label for="sigle_usuel">Sigle usuel</label>
                        <input type="text" class="form-control" id="sigle_usuel">
                    </div>
                    <div>
                        <label for="enseigne">Enseigne</label>
                        <input type="text" class="form-control" id="enseigne">
                    </div>
                </div>
                <div id="sectionAssociés">
                    <h4> Associés</h4>
        
                    <div class="form-field">
                        
                        <label for="associes">Combien d'associés avez vous ?</label>
                        <input type="number" id="nb_associes" name="nb_associes" min="1" max="10" />
        
                        
                    </div>
                    
                
                    <div class="form-field">
                        
                        <label for="nom">Nom </label>
                        <input type="text" class="form-control" id="nom" style="width: 100%;">
                        
                    </div>

                    <div class="form-field">
                        
                        <label for="prenoms">Prénoms </label>
                        <input type="text" class="form-control" id="prenom" style="width: 100%;">
                        
                    </div>

                    <div class="form-field">
                        
                        <label for="date_de_naissance">Date de naissance </label>
                        <input type="date" class="form-control" id="date_de_naissance" style="width: 100%;">
                        
                    </div>

                    <div class="form-field">
                        
                        <label for="lieu_de_naissance">Lieu de naissance </label>
                        <input type="text" class="form-control" id="lieu_de_naissance" style="width: 100%;">
                        
                    </div>

                    <div class="form-field">
                        
                        <label for="lieu_de_residence">Lieu de résidence </label>
                        <input type="text" class="form-control" id="lieu_de_residence" style="width: 100%;">
                        
                    </div>

                    <div class="form-field">
                        
                        <label for="numero">Numéro </label>
                        <input type="text" class="form-control" id="numero" style="width: 100%;">
                        
                    </div>
        
                    
                    
                </div>
        
                <h4> Capital social, valeur nominale et nombre de parts: (en FCFA)</h4>
        
                <div class="form-field">
                    <div>
                        <label for="capital">Capital</label>
                        <input type="text" class="form-control" id="capital" pattern="\d*" >
        
                    </div>
                    <div>
                        <label for="valeur_nominale">Valeur nominale</label>
                        <input type="text" class="form-control" id="valeur_nominale" pattern="\d*">
                    </div>
                    <div>
                        <label for="actions">Parts ou actions</label>
                        <input type="text" class="form-control" id="actions" pattern="\d*">
                    </div>
                </div>
        
                <h4> Identification et détermination de la valeur des apports par associé </h4>
        
                <div class="form-field">
                    <input type="text" class="form-control" id="valeur_apport">
                </div>
        
                <h4> Activités </h4>
        
                <div class="form-field">
                    <input type="text" class="form-control" id="activite">
                </div>
        
                <h4> Date de début d'activité</h4>
        
                <div class="form-field">
                    <input type="date" class="form-control" id="date_debut_activite">
                </div>
        
                <button class="btn btn-primary btn-next">Suivant</button>

            </div>

            <div class="form-container section">

                

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
                    
                        <div>
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" id="ville">
                        </div>
                        <div>
                            <label for="commune">Commune</label>
                            <input type="text" class="form-control" id="commune">
                        </div>
                        <div>
                            <label for="rue">Rue</label>
                            <input type="text" class="form-control" id="rue">
                        </div>
                        <div>
                            <label for="quartier">Quartier</label>
                            <input type="text" class="form-control" id="quartier">
                        </div>
                        <div>
                            <label for="immeuble_villa">Immeuble ou villa</label>
                            <input type="text" class="form-control" id="immeuble_villa">
                        </div>
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
                    
                    <button type="submit" class="btn btn-primary btn-next final">Suivant</button>
                </div>
            </div>
        </form>
        

    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
    var sections = document.querySelectorAll('.section');
    var index = 0;
    var btnNext = document.querySelectorAll('.btn-next');
    var finalBtn = document.querySelector('.btn-next.final');

    btnNext.forEach(button => {
        button.addEventListener('click', function() {
            // Vérifier s'il y a une option sélectionnée
            var selectedOption = document.querySelector('input[name="typeEntreprise"]:checked');
            if (selectedOption) {
                // Stocker la valeur dans sessionStorage
                sessionStorage.setItem("typeEntreprise", selectedOption.value);
            }

            // Masquer la section actuelle
            sections[index].classList.remove('active');
            // Passer à la section suivante
            index++;
            if (index >= sections.length) {
                index = 0;
            }
            // Afficher la nouvelle section
            sections[index].classList.add('active');
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
    var nbAssociesInput = document.getElementById("nb_associes");
    var sectionAssocies = document.getElementById("sectionAssociés");

    nbAssociesInput.addEventListener("change", function() {
        var nbAssocies = parseInt(nbAssociesInput.value);

        // Supprimer les anciens champs associés
        while (sectionAssocies.children.length > 2) {
            sectionAssocies.removeChild(sectionAssocies.lastChild);
            sectionAssocies.removeChild(sectionAssocies.lastChild);
        }

        // Ajouter de nouveaux champs associés en fonction de la valeur de nb_associes
        for (var i = 0; i < nbAssocies; i++) {
            var label = document.createElement("label");
            label.textContent = "Nom et prénoms, date et lieu de naissance, lieu de résidence et numéro";
            var textField = document.createElement("div");
            textField.className = "form-field";
            textField.innerHTML = '<input type="textarea" class="form-control" style="width: 100%;">';

            sectionAssocies.appendChild(label);
            sectionAssocies.appendChild(textField);
        }
    });
});


        document.addEven tListener("DOMContentLoaded", function() {
            // Vérifie si le choix précédent était "ei"
            var typeEntreprise = sessionStorage.getItem("typeEntreprise");
            if (typeEntreprise === "ei") {
                // Masque la section des associés
                var sectionAssociés = document.getElementById("sectionAssociés");
                if (sectionAssociés) {
                    sectionAssociés.style.display = "none";
                }
            }
        });


        function redirectToNextPage() {
    // Vérifier si tous les champs sont remplis
    var inputs = document.querySelectorAll('input[type="text"], input[type="textarea"]');
    var allFieldsFilled = true;
    inputs.forEach(input => {
        if (!input.value.trim()) {
            allFieldsFilled = false;
            return;
        }
    });

// Afficher une alerte si un champ est vide
    if (!allFieldsFilled) {
        alert("Veuillez remplir tous les champs avant de passer au suivant.");
        return; // Arrêter l'exécution de la fonction si un champ est vide
    }

    // Vérifier si les champs contenant que des chiffres respectent le format
    var numericInputs = document.querySelectorAll('input[pattern]');
    var allNumericFieldsValid = true;
    numericInputs.forEach(input => {
        var pattern = /^\d+$/;
        if (!pattern.test(input.value.trim())) {
            allNumericFieldsValid = false;
            // Afficher un message d'erreur en dessous du champ
            var errorMessageElement = document.createElement('p');
            errorMessageElement.textContent = "*Ce champ doit contenir uniquement des chiffres.";
            errorMessageElement.style.color = "red";
            input.parentNode.appendChild(errorMessageElement);
        }
    });

    // Si certains champs ne contiennent pas que des chiffres, arrêter ici
    if (!allNumericFieldsValid) {
        return;
    }

    
}
</script>
@include('include.footer')