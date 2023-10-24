<?php
include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';
extract($_POST);

// Vérifiez d'abord si l'ID est défini
if (isset($id)) {
    $es = new EtudiantService();
    // Récupérez l'étudiant en fonction de l'ID
    $etudiant = $es->findById($id);
    if ($etudiant) {
        // Mettez à jour les attributs de l'étudiant
        $etudiant->setNom($nom);
        $etudiant->setPrenom($prenom);
        $etudiant->setVille($ville);
        $etudiant->setSexe($sexe);
        // Utilisez la méthode de mise à jour pour mettre à jour l'étudiant
        $es->update($etudiant);
        // Redirigez vers la page d'index ou une autre page appropriée après la mise à jour
        header("location:../index.php");
    } else {
        echo "Aucun étudiant trouvé avec l'ID spécifié.";
    }
} else {
    echo "L'ID n'a pas été spécifié pour la mise à jour.";
}
?>

