@include('include.header')
<style>
.form-section{
    display: none;
}

.form-section.current{
    display: inline;
}
.parsley-errors-list{
    color:red;
}

</style>





  <body>

    <div class="container-fluid  ">
      <div class="row justify-content-md-center">
        <div class="col-md-9 ">
            <div class="card px-5 py-3 mt-5 shadow">
               <h1 class="text-primary text-center mt-3 mb-4">PROCEDURE DE CREATION D'ENTREPRISE</h1>

                        <div class="nav nav-fill my-3">
                          <label class="nav-link shadow-sm step0    border ml-2 ">Etape 1</label>
                          <label class="nav-link shadow-sm step1   border ml-2 " >Etape 2</label>
                          <label class="nav-link shadow-sm step2   border ml-2 " >Etape 3</label>
                        </div>

                <form action={{ route('Entreprise.store') }} method="post" class="employee-form">
                 @csrf
                <div class="form-section">
                    <p>
                        Le statut juridique d’une entreprise détermine son cadre légal et impacte son fonctionnement et son développement. Créer son entreprise nécessite de faire un choix avisé du statut juridique car il conditionne la structure, la gestion, la fiscalité et la responsabilité des dirigeants. Il existe un large choix de formes juridiques avec des spécificités propres à chacune. Il est donc nécessaire de tenir compte de certains éléments notamment le capital social, l’affectio societatis, l’activité envisagée, l’étendue de la responsabilité ainsi que les différents régimes sociaux et fiscaux afin de choisir la forme juridique adéquate.
                    </p>
                    <p>
                        Une société à responsabilité limitée est une société commerciale où l'associé voit sa responsabilité limitée jusqu'à concurrence des apports. Une SARL présente des caractéristiques d'une société mixte, et les parts détenues dans le capital ne sont pas librement accessibles sans accord de tout ou partie des associés
                    </p>
                    <p>
                        Une entreprise individuelle est une entreprise dirigée par une seule personne, et qui n'a pas de personnalité morale, bien qu'elle soit parfois inscrite au répertoire des métiers, au registre du commerce et des sociétés, ou exercée en profession libérale. Ce type d'entreprise peut également comporter des salariés
                    </p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="forme_juridique" id="flexRadioDefault1" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Entreprise Individuelle (EI)
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="forme_juridique" id="flexRadioDefault2" value="2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Société à responsabilité limité (SARL)
                        </label>
                      </div>

                </div>
                <div class="form-section">
                    <label for="">Dénomination et forme juridique</label>
                    <input type="text" class="form-control mb-3" name="denomination" required>
                    <label for="">Sigle usuel</label>
                    <input type="text" class="form-control mb-3" name="sigle" required>
                    <label for="">Enseigne</label>
                    <input type="text" class="form-control mb-3" name="Enseigne" required>
                    <label for="">Combien d'associés avez vous ?</label>
                    <input type="number" id="nb_associes" name="nb_associes" min="1" max="10" class="form-control mb-3"  required>
                </div>
                <div class="form-section">
                    <label for="">Activités</label>
                    <input type="text" class="form-control" id="activite" name="activite">
                    <label for="">Capital</label>
                    <input type="text" class="form-control" id="capital" name="capital">
                    <label for="">Valeur Nominale</label>
                    <input type="text" class="form-control" id="valeur_nominale" name="valeur_nominale">
                    <label for="">Date de début d'activité</label>
                    <input type="date" class="form-control" id="date_debut" name="date_debut">
                </div>
              <div class="form-navigation mt-3">
                 <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                 <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                 <button type="submit" class="btn btn-success float-right">Submit</button>
              </div>

            </form>
        </div>

        </div>
      </div>
    </div>




<script>

    $(function(){
        var $sections=$('.form-section');


        function navigateTo(index){

            $sections.removeClass('current').eq(index).addClass('current');

            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [Type=submit]').toggle(atTheEnd);


            const step= document.querySelector('.step'+index);
            step.style.backgroundColor="#24a7b8";
            step.style.color="white";



        }

        function curIndex(){

            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function(){
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function(){
            $('.employee-form').parsley().whenValidate({
                group:'block-'+curIndex()
            }).done(function(){
                navigateTo(curIndex()+1);
            });

        });

        $sections.each(function(index,section){
            $(section).find(':input').attr('data-parsley-group','block-'+index);
        });


        navigateTo(0);



    });


</script>



  </body>
</html>


