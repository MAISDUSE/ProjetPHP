CREATE TABLE Vinyle {
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
  label VARCHAR(30),
  quantite NUMERIC
};

CREATE TABLE Materiel {
  intitule VARCHAR(100),
  info VARCHAR(200),
  prix NUMERIC,
  ref VARCHAR(30) PRIMARY KEY,
  categorie VARCHAR(20),
  img VARCHAR(50),
  type VARCHAR(30),
  constructeur VARCHAR(30)
};
