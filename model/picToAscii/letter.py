import Image
import PSDraw

#-*- coding:utf-8 -*-
def text2png(text):

    adtexts = [ ]
    textcolor = "#000000"
    adcolor = "#FF0000"

    import Image, ImageDraw, ImageFont, uuid

    ad = []
    for adtext in adtexts:
        ad += [(adtext.encode('gbk'), adcolor)]

    wraptext = [""]
    l = 0
    for i in text.decode('utf-8'):
        fi = i.encode('gbk')
        delta = len(fi)
        if i == '\n':
            wraptext += [""]
            l = 0
        elif l + delta > 40:
            wraptext += [fi]
            l = delta
        else:
            wraptext[-1] += fi
            l += delta

    wrap = [(text, textcolor) for text in wraptext]
    wrap += ad

    i = Image.new("RGB", (15, len(wrap) * 17 + 5), "#FFFFFF")
    d = ImageDraw.Draw(i)
    f = ImageFont.truetype("1.ttf", 16)
    for num, (text, color) in enumerate(wrap):
        d.text((2, 17 * num + 1), text.decode('gbk'), font = f, fill = color)

    filename = text + ".png"
    with open( "letter/"+ filename, "wb") as s:
        i.save(s, "PNG")
    return filename

for i in range(ord("a"), ord("z")):
    text2png(chr(i))
for i in range(ord("A"), ord("Z")+1):
    text2png(chr(i))
