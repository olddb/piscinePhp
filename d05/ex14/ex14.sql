SELECT etage_salle AS 'etage',sum(nbr_siege) AS 'sieges' FROM `db_risvelin`.`salle` GROUP BY etage_salle ORDER BY sum(nbr_siege) DESC;
