
import ImageDraw, Image

def text2png(text):
    # Configurations:
    textcolor = "#000000"
    adcolor = "#FF0000"
 
    import Image, ImageDraw, ImageFont, uuid
 
    i = Image.new("RGB", (22,22), "#FFFFFF")
    d = ImageDraw.Draw(i)
    f = ImageFont.truetype("1.ttf", 20)
    for num, (text, color) in enumerate(wrap):
	d.text((20, 20), text.decode('gbk'), font = f, fill = textcolor)
 
    filename = text + ".png" 
    with open( filename, "wb") as s:
        i.save(s, "PNG")
    return  filename

text2png("a")
