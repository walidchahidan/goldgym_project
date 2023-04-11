<style>
       @font-face {
    font-family: "poppins";
    src: url('../../fonts/Poppins/Poppins-Regular.ttf');
}
@font-face {
    font-family: 'coolvetica';
    src: url('../fonts/coolvetica/coolvetica\ rg.otf');
}
 #headcontact{
        padding-top: 30px;
        text-align: center;
        font-family: 'coolvetica' sans-serif;
 }
 #mycontainer{
        width: 70%;
        margin-top: 30px;
        background-color: #F5F7FB;
 }
 input{
    margin-bottom: 20px;
 }
 #form{
    background-color: transparent;
 }

 #btnenv{
    margin-top: 20px;
    width: 100%;
    background-color: #796305;
    border: none;
 }
 #btnenv:hover{
    background-color: black;
 }
 #contactsec{
    padding-bottom: 40px;
 }
</style>
   

<section id="contactsec">
   
    <div id="headcontact">
        <h1>Contact Us</h1>
        
    </div>
    <div class="container" id="mycontainer">
        
            <form action="{{route('sendEmailcontact')}}" method="POST" enctype="multipart/form-data">
               @csrf
                <input type="text" class="form-control" placeholder="Nom complet" name="nom">
                <input type="text" class="form-control" placeholder="Adresse email" name="email">
                <input type="text" class="form-control" placeholder="Téléphone" name="telephone">
                <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="message" name="message"></textarea>

                <button type="submit" id="btnenv" class="btn btn-success" >Envoyer</button>

            </form>
       

    </div>
</section>