<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate - {{$certificate->certificate_key}}</title>
</head>

<style>
    .container {
        width: 968px;
        margin: 2rem auto;
        margin-bottom: 5rem;
        border: 1px solid rgba(0, 0, 0, .5);
        padding: 3rem;
        text-align: center;
        line-height: 1.8;
        padding-bottom: .5rem;
    }

    em {
        text-transform: capitalize;
    }
    .date {
        display: flex;
        flex-direction: row-reverse;
        margin-right: 5rem;
    }
    .main-text {
        line-height: 2.2;
        padding-left: 4rem;
        padding-right: 4rem;
    }
    .sign {
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        margin-bottom: 5rem;
    }

    #printBtn {
        background: #0069D9;
        color: white;
        padding: 1rem 2rem;
        cursor: pointer;
        position: absolute;
        margin-left: 1rem;
        border: none;
        font-size: 1.1rem;
        border-radius: .5rem;
        transition: .3s;
    }

    #printBtn:hover {
        background-color: #0069d9d8;
    }
</style>
<body>
    <button id="printBtn">Print</button>
    <div class="container text-center">
        <h3>République Algérienne Démocratique et Populaire</h3>
        <h1>ATTESTATION DE STAGE</h1>
        <p style="text-align: left; " class="main-text">
           &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Je, soussigné(e) 
            <em>{{$supervisor->first_name_internship_supervisor}} {{$supervisor->last_name_internship_supervisor}} 
            </em>&nbsp; 
             responsable de stage de 
            <em>{{$internship->internship_theme}} </em>&nbsp; 
             atteste que l'étudiant(e) 
             <em>{{$certificate->student->first_name_student}} {{$certificate->student->last_name_student}}
            </em>&nbsp; 
             né(e) le  
             <em>{{$certificate->student->date_of_birth}}</em>&nbsp; 
              <em>{{$certificate->student->location_of_birth}}</em>&nbsp;  
              inscrit(e) à L'ECOLE NATIONAL POLYTECHNIQUE DE CONSTANTINE, <br>
            a effectué un stage de formation dans la filière / spécialité 
            <em>{{$certificate->student->speciality}} </em>&nbsp; 
            à  {{$company->name_company}}
            Durant La période du 
            <em> {{$internship->start_date}}</em>&nbsp; 
            au 
            <em> {{$internship->end_date}} </em>&nbsp; 
        </p>

        <div class="date">
            <p>
                Fait à ...............
                <em> {{__('')}} </em>&nbsp; 
                le 
                <em> {{date('d/m/Y', strtotime($certificate->created_at))}}</em>&nbsp; 
            </p>
        </div>

        <div class="sign">
            <p>Le Representant de l'Ecole Nationale Polytechnique Constantine</p>
            <p>Le Responsable de l'etablissement ou de l'adminstration d'acceuil</p>
        </div>
        
            <hr>
            <p style="text-align: left; font-style: italic;">Cette attestation est delivrée pour servir et faire valoir ce que de droit</p>
    </div>

    <script>
        const printBtn = document.getElementById('printBtn');

        printBtn.addEventListener('click', () => {
            window.print()
        })
    </script>

</body>
</html>