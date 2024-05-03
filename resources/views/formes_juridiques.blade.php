<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprendre les Entreprises Individuelles et les SARL</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
        .btn-next {
            margin-top: 20px;
            font-size: 18px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
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
            <button class="btn btn-primary btn-next final">Valider</button>
        </div>

        
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

    finalBtn.addEventListener('click', function() {
        window.location.href = 'formulaire';
    });
</script>

</body>
</html>