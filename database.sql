CREATE TABLE utilisateur
(
    id int primary key AUTO_INCREMENT,
    nom varchar(50),
    prenom varchar(50),
    email varchar(100) UNIQUE,
    pass varchar(255)
);

CREATE TABLE agent
(
    id int primary key,
    FOREIGN KEY (id) REFERENCES utilisateur(id)
);

CREATE TABLE fournisseur
(
    id int primary key,
    FOREIGN KEY (id) REFERENCES utilisateur(id)
);
CREATE TABLE consommateur 
(
    id int primary key,
    idFournisseur int,
    FOREIGN KEY (idFournisseur) REFERENCES fournisseur(id),
    FOREIGN KEY (id) REFERENCES utilisateur(id)
);

CREATE TABLE fichierAnuelle
(
    fichierChemin varchar(255) primary key
);

CREATE TABLE ConsommationAnuelle
(
    id int primary key AUTO_INCREMENT,
    idConsommateur int,
    fichierChemin varchar(255),
    agentDepo int,
    annee DATE,
    ConsommationEau decimal(15,4),
    ConsommationElectricite decimal(15,4),
    dateSaisie DATE,
    FOREIGN KEY (idConsommateur) REFERENCES consommateur(id),
    FOREIGN KEY (fichierChemin) REFERENCES fichierAnuelle(fichierChemin),
    FOREIGN KEY (agentDepo) REFERENCES agent(id)
);

CREATE TABLE declaration(
    id int primary key AUTO_INCREMENT,
    idFournisseur int,
    idConsommateur int,
    cheminCompteurEauImg varchar(255),
    cheminCompteurElectriciteImg varchar(255),
    indexEau decimal(15,4),
    indexElectricite decimal(15,4),
    dateSaisie DATE DEFAULT (CURRENT_DATE()),
    statut varchar(100) DEFAULT 'En attente de verification',
    dateDebut DATE,
    dateFin DATE DEFAULT (CURRENT_DATE()),
    prixHT decimal(15,4),
    prixTTC decimal(15,2),
    FOREIGN KEY (idFournisseur) REFERENCES fournisseur(id),
    FOREIGN KEY (idConsommateur) REFERENCES consommateur(id)
);

CREATE TABLE facture(
    id int primary key AUTO_INCREMENT,
    idDeclaration int,
    etat varchar(20) DEFAULT 'Impayée', 
    datePaiement DATE,
    cheminGenere varchar(255),
    dateGeneration DATE DEFAULT (CURRENT_DATE()),
    FOREIGN KEY (idDeclaration) REFERENCES declaration(id)
);

CREATE TABLE reclamation(

    idReclamation int primary key AUTO_INCREMENT,
    id int,
    reponse varchar(1000),
    description varchar(1000),
    dateCreation DATE DEFAULT (CURRENT_DATE()),
    statut varchar(30) DEFAULT 'En Attente',
    FOREIGN KEY (id) REFERENCES consommateur(id)
);

CREATE TABLE reclamationFuite(

    idReclamation int primary key,
    FOREIGN KEY (idReclamation) REFERENCES reclamation(idReclamation)
);


CREATE TABLE autre(

    idReclamation int primary key,
    FOREIGN KEY (idReclamation) REFERENCES reclamation(idReclamation)
);


CREATE TABLE fuiteInterne(

    idReclamation int primary key,
    FOREIGN KEY (idReclamation) REFERENCES reclamationFuite(idReclamation)
);

CREATE TABLE fuiteExterne(

    idReclamation int primary key,
    FOREIGN KEY (idReclamation) REFERENCES reclamationFuite(idReclamation)
);
