#!/usr/bin/env python3
from PIL import Image, ImageDraw
import io

# Create a 32x32 image with transparent background
size = 32
img = Image.new('RGBA', (size, size), (0, 0, 0, 0))
draw = ImageDraw.Draw(img)

# Telegram blue color
telegram_blue = (42, 171, 238)

# Draw a circle background
draw.ellipse([2, 2, size-2, size-2], fill=telegram_blue)

# Draw a simplified telegram icon (paper plane)
# Triangle shape representing paper plane
points = [
    (8, 16),   # left point
    (24, 12),  # top right
    (20, 20),  # bottom right
    (12, 18)   # bottom left
]
draw.polygon(points, fill='white')

# Save as WebP
img.save('/Users/Shared/lp-dentfixturkey/commons/assets/tg-white.webp', 'WEBP', quality=95)
print("Telegram icon created successfully!")
