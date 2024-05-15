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
            color: #1e3a8a; /* Bleu foncé pour les titres */
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
            margin: ;

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

    </style>

<body>
    <div class="form-container container section">
        <h2 class="form-title">PROCEDURE DE CREATION D'ENTREPRISE</h2>
        <h3 class="form-subtitle">INFORMATIONS REQUISES</h3>

        <h4> Dénomination et forme juridique</h4>

        <div class="form-field">
            <textarea type="text" class="form-control" id="denomination"> </textarea>
        </div>

        <h4> Sigle usuel et enseigne</h4>

        <form action="" method="post">
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

                <label for="associes">Nom et prénoms, date et lieu de naissance, lieu de résidence et numéro</label>

            </div>

            <div class="form-field">
                    <input type="textarea" class="form-control" id="ville" style="width: 100%;">
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

        <button type="submit" class="btn btn-primary" onclick="redirectToNextPage()">Suivant</button>
    </form>
    </div>

    <script>

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


        document.addEventListener("DOMContentLoaded", function() {
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

    // Redirection vers la page suivante
    window.location.href = "formulaire2";
}

    </script>
</body>

@include('include.footer')

