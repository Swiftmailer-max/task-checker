# Task Checker API

Prosty system do sprawdzania odpowiedzi uczniów.

## Funkcje:
- REST API (Symfony)
- Walidacja odpowiedzi
- Obsługa wielu zadań
- JSON response z feedbackiem

## Endpoint:
POST /api/check

### Request:
{
  "taskId": 1,
  "answer": "42"
}

### Response:
{
  "correct": true,
  "feedback": "Dobrze! Świetna robota."
}

## Dlaczego to stworzyłem?
Projekt jest częścią większego systemu edukacyjnego, który rozwijam – aplikacji społecznościowej dla uczniów z automatycznym sprawdzaniem zadań.
