#!/bin/bash
# Script para iniciar Vite y Laravel en paralelo
#start_dev.sh

# Arrancar Vite en segundo plano
npm run dev &

# Guardar el PID de Vite
VITE_PID=$!

# Arrancar Laravel
php artisan serve &

# Guardar el PID de Laravel
LARAVEL_PID=$!

# Esperar a que ambos procesos terminen
wait $VITE_PID $LARAVEL_PID
