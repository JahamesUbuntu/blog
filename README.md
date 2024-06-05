# Blogs

## Installatie en Gebruik

Volg de onderstaande stappen om het project op je lokale machine te installeren en te gebruiken:

1. **Kloon de repository**:
   ```bash
   git clone https://github.com/JahamesUbuntu/blog.git blogs
   
   cd blogs
   ```
   
2. **Installer de nodige dependencies**:
    ```bash 
   npm install
   
   composer install
    ```
   
3. **Maak een .env**: Maak een bestand .env in de root map van het project en kopieer de inhoud van .env.example in het nieuwe bestand.


4. **Genereer een applicatie sleutel**
    ```bash
   php artisan key:generate
    ```

5. **Voer de database migraties en seeders uit**
    ```bash
   php artisan migrate:fresh --seed 
    ```

6. **Start de ontwikkel server**
    ```bash
   php artisan serve 
    ```
   
7. Log in: Open je browser en ga naar http://127.0.0.1:8000.
Je kunt inloggen met de volgende gegevens:
   * Email: user@example.com
   * Wachtwoord: password
