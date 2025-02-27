$(document).ready(function () {
    const formations = {
        "management_certifiante": [
            "Consultant certifié : Lead Implementer ISO 9001",
            "Auditeur certifié : Lead Implementer ISO 9001",
            "Consultant certifié : Lead Implementer ISO 21001",
            "Auditeur certifié : Lead Implementer ISO 21001",
            "Consultant certifié : Lead Implementer ISO 14001",
            "Auditeur certifié : Lead Auditor ISO 14001",
            "Consultant certifié : Lead Implementer ISO 45001",
            "Auditeur certifié : Auditor Lead ISO 45001"
        ],
        "management_qualifiante": [
            "Exigences de la norme ISO 9001:2015",
            "Exigences de la norme ISO 21001:2018",
            "Exigences de la norme ISO 45001:2018",
            "Exigences de la norme ISO 14001:2015",
            "Audit interne selon la norme ISO 19011:2018",
            "La satisfaction client et traitements des réclamations selon la norme ISO 10002:2018",
            "Management des risques selon la norme ISO 31000:2018",
            "Indicateurs et tableaux de bord",
            "Management par approche processus",
            "Management par l'innovation",
            "Concevoir et mettre en œuvre un Système de Management Intégré Qualité – Sécurité – Environnement"
        ],
        "gestion_rh": [
            "Élaboration d'un plan de formation",
            "Gestion des carrières et des compétences",
            "Gestion des compétences et de la polyvalence",
            "Gestion des ressources et management d'équipe",
            "La communication RH au service de la fonction GRH",
            "Définition et mise en place d'un plan de carrière"
        ],
        "finance": [
            "Initiation à la finance d'entreprise",
            "Les fondamentaux de l'analyse financière",
            "Les outils d'analyse financière",
            "Analyse financière et diagnostic financier",
            "Gestion de la trésorerie et du cash-flow",
            "Stratégies de financement des entreprises"
        ]
    };

    // Click on Management Button
    $("#managementBtn").click(function () {
        $("#certifChoice").removeClass("hidden");  // Show Certifiante/Qualifiante choices
        $("#gestionChoice").addClass("hidden");    // Hide Gestion RH/Finance choices
        $("#formationList").addClass("hidden");    // Hide previous formations
    });

    // Click on Certifiante/Qualifiante
    $("#certifChoice .certif-card").click(function () {
        const type = $(this).data("type");
        const key = `management_${type}`;
        displayFormations(formations[key]);
    });

    // Click on Gestion des performances organisationnelles Button
    $("#performanceBtn").click(function () { 
        $("#certifChoice").addClass("hidden");     // Hide Certifiante/Qualifiante options
        $("#formationList").addClass("hidden");    // Hide previous formations
        $("#gestionChoice").removeClass("hidden"); // ✅ Show Gestion RH/Finance options
    });

    // Click on Gestion RH/Finance
    $(".gestion-card").click(function () {
        const type = $(this).data("type");
        displayFormations(formations[type]);
    });

    // Display Formations List
    function displayFormations(list) {
        $("#formations").empty();
        list.forEach(formation => {
            $("#formations").append(`<li>${formation}</li>`);
        });
        $("#formationList").removeClass("hidden");
    }
});