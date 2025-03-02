# WDPAI - Lab1

Projekt na zajęcia WDPAI Laboratorium 1

## Instalacja i uruchomienie

1. Otwórz terminal.
2. Przejdź do katalogu projektu.
3. Uruchom Docker Compose poleceniem:
    ```bash
    docker compose up
    ```
   lub w osobnym terminalu (w tle):
    ```bash
    docker compose up -d
    ```
- Ponowne zbudowanie obrazu:
    ```bash
    docker compose build
    ```

## Konfiguracja

- Domyślny port `8080` (można zmienić w pliku [YAML Compose](./docker-compose.yaml))
- Port wewnątrz kontenera: `80`.
- Zmiana wersji PHP poprzez edycję pliku [Dockerfile](./docker/php/Dockerfile).
