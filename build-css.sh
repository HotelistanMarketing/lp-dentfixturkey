#!/bin/bash

echo "Building CSS files from Less..."

# Find and compile all .less files in variants and pages directories
find variants -name "*.less" -exec sh -c 'echo "Compiling $1..."; npx lessc "$1" "${1%.less}.css" --clean-css="--s0 --advanced"' _ {} \;
find pages -name "*.less" -exec sh -c 'echo "Compiling $1..."; npx lessc "$1" "${1%.less}.css" --clean-css="--s0 --advanced"' _ {} \;

echo "CSS build completed!"
echo "Running Gulp to minify JavaScript..."

npx gulp uglify-merge

echo "Build process completed successfully!"
