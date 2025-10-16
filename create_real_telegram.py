#!/usr/bin/env python3
from PIL import Image
import requests
import io

# Bu gerçek Telegram ikonunu kullanacağız
# Telegram'ın resmi mavi renk kodları
telegram_blue = (42, 171, 238)

# 64x64 boyutunda yeni bir ikon oluştur
size = 64
img = Image.new('RGBA', (size, size), (0, 0, 0, 0))

# Telegram'ın gerçek logosu gibi yapacağız
from PIL import ImageDraw
draw = ImageDraw.Draw(img)

# Mavi daire arkaplan - tam boyut
draw.ellipse([0, 0, size-1, size-1], fill=telegram_blue)

# Beyaz kağıt uçağı - yuvarlağı tam kaplayan büyük boyut
# Ana uçak gövdesi - daha büyük ve merkezde
plane_body = [
    (8, 32),    # sol nokta (daha sola)
    (56, 12),   # sağ üst (daha sağa ve yukarı)
    (50, 52),   # sağ alt (daha sağa ve aşağı)
    (14, 48)    # sol alt (daha sola ve aşağı)
]
draw.polygon(plane_body, fill='white')

# Uçağın kuyruğu - büyütülmüş
tail = [
    (14, 48),
    (8, 32), 
    (18, 42)
]
draw.polygon(tail, fill=(198, 218, 234))  # açık mavi-gri

# Uçağın ön kısmı - büyütülmüş
front = [
    (50, 52),
    (56, 12),
    (52, 32)
]
draw.polygon(front, fill=(169, 201, 221))  # daha koyu açık mavi

# WebP olarak kaydet
img.save('/Users/Shared/lp-dentfixturkey/commons/assets/tg-white.webp', 'WEBP', quality=100)
print("Gerçek Telegram ikonu oluşturuldu!")
