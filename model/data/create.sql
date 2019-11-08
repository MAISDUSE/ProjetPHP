CREATE TABLE Vinyle (
  intitule VARCHAR(100),
  info VARCHAR(200),
  prix NUMERIC,
  ref VARCHAR(30) PRIMARY KEY,
  categorie VARCHAR(20),
  img VARCHAR(50),
  genre VARCHAR(30),
  annee NUMERIC,
  artiste VARCHAR(30),
  album VARCHAR(30),
  label VARCHAR(30)
);

CREATE TABLE Materiel (
  intitule VARCHAR(100),
  info VARCHAR(200),
  prix NUMERIC,
  ref VARCHAR(30) PRIMARY KEY,
  categorie VARCHAR(20),
  img VARCHAR(50),
  type VARCHAR(30),
  constructeur VARCHAR(30),
  nom VARCHAR(30)
);

CREATE TABLE Utilisateur (
  nom VARCHAR(100),
  prenom VARCHAR(100) PRIMARY KEY,
  email VARCHAR(200),
  password VARCHAR(100)
);
