const bouton = document.getElementById('button');

function register() {



    const nom = document.querySelector("#nom").value;
    const email = document.querySelector("#email").value;
    const mdp = document.querySelector("#pwd").value;
    const mdp2 = document.querySelector("#pwd2").value;


    // (async function register() {
    //     try {
    //         const response = await fetch('back/inscription.php', {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //             },
    //             body: JSON.stringify({
    //                 nom: nom,
    //                 email: email,
    //                 mdp: mdp,
    //                 mdp2: mdp2
    //             }),
    //         });
    
    //         if (!response.ok) {
    //             throw new Error('Erreur de réseau');
    //         }
    
    //         const data = await response.json();
    
    //         if (data.numero == 1) {
    //             swal("MOOOOOOONSTRE");
    //             console.log(data.msg);
    //             // window.location.href = "accueil.php"; 
    //         } else {
    //             swal("MOOOONSTRE", "DOUBLE MOOOOONSTRE");
    //             console.log(data.msg);
    //             // window.location.href = "accueil.php";
    //         }
    //     } catch (error) {
    //         // window.location.href = "accueil.php"; 
    //         alert('error');
    //         console.error(error);
    //     }
    // })();
    
    // axios.post('back/inscription.php', {
    //     nom: nom,
    //     email: email,
    //     mdp: mdp,
    //     mdp2: mdp2
    // })
    // .then(function (response) {
    //     if (response.numero == 1) {
    //         swal("MOOOOOOONSTRE");
    //         console.log(response.msg);
    //         // window.location.href = "accueil.php"; 
    //     } else {
    //         swal("MOOOONSTRE", "DOUBLE MOOOOONSTRE");
    //         console.log(response.msg);
    //         // window.location.href = "accueil.php";
            
    //     }
    // })
    // .catch(function (error) {
    //     // window.location.href = "accueil.php"; 
    //     alert('error');
    //     console.error(error)
    // });
    $.ajax({
        url: '/back/inscriptionBack.php',
        dataType: 'JSON',
        type: 'POST',
        data: {
            nom: nom,
            email: email,
            mdp: mdp,
            mdp2: mdp2,

        },
        success: function(response) {
            if(response['numero'] == 1){
                swal("Good job!", "You clicked the button!", "success");
            }else{
                swal("Mooooonstre");
            }
            
            
        },
        error: function(xhr, status, error) {
            // alert('erreur php')
            console.log(error)
            console.log(xhr)
            console.log(status)
        }
    });



    
    
}

bouton.addEventListener('click',() => {
    register();
})

// function connexion(){
//     const email = document.querySelector("#id").value;
//     const mdp = document.querySelector("#idpwd").value;

//     axios.post('back/connexionBack.php', {
//         etape: "connexion",
//         identifiant: email,
//         motdepasse: mdp,
//     })
//     .then(function (response) {
//         if(response.data.numero == 1) {
//             // window.location.href = "accueil.php";
//         } else if(response.data.numero == 2) {
            
//         }
//     })
//     .catch(function (error) {
//         console.error(error);
//     });
// }

// function deconnexion(){

//     $.ajax({
//         url: 'back/connexionBack.php',
//         dataType: 'JSON',
//         type: 'POST',
//         data: {
//             etape: "deconnexion",

//         },
//         success: function(response) {
            
//             document.location.href="index.php"; 
           
//         },
//         error: function() {
//             alert('erreur php')
//         }
//     });
// }

// function deconnexion(){

// }




