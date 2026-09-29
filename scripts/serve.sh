#!/usr/bin/env bash
# Local preview of the site (needs PHP: `brew install php`).
# Usage: ./scripts/serve.sh [port]   → http://localhost:8000
cd "$(dirname "$0")/.." && php -S "localhost:${1:-8000}"
