# Dictionnaire de données

## Menus (`Menu`)

|Champ|Type|Specificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre plat|
|type|tinyint(1)|NOT NULL|Le type de plat (1=principal, 2=dessert)|
|name|VARCHAR(64)|NOT NULL|Le nom du plat|
|description|VARCHAR(255)|NULL|Description du plat|
|price|FLOAT|NOT NULL|Prix du plat|
|picture|VARCHAR(255)|NOT NULL|Nom du fichier image|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du plat|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du plat|


## Schedule (`schedule`)

|Champ|Type|Specificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du jour|
|day|VARCHAR(64)|NOT NULL|Le jour|
|open_hour|int(2)|NOT NULL|L'heure d'ouverture|
|close_hour|int(2)|NOT NULL|L'heure de fermeture|
|place|VARCHAR(64)|NOT NULL|Le lieu|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création de la categorie|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la categorie|
