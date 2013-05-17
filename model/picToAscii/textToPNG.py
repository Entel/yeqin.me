import ImageDraw, Image

def text2png(text):
    # Configurations:
    textcolor = "#000000"
    adcolor = "#FF0000"
 
    # Don't touch the code below
    import Image, ImageDraw, ImageFont, uuid
 
    # Build rich text for ads
 
    # Wrap line for text
    #   Special treated Chinese characters
    #   Workaround By Felix Yan - 20110508
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
 
    # Format wrapped lines to rich text
    wrap = [(text, textcolor) for text in wraptext]
    #wrap += ad
 
    # Draw picture
    i = Image.new("RGB", (22, len(wrap)*17+5), "#FFFFFF")
    d = ImageDraw.Draw(i)
    f = ImageFont.truetype("1.ttf", 18)
    for num, (text, color) in enumerate(wrap):
        d.text((2, 17 * num + 1), text.decode('gbk'), font = f, fill = color)
 
    # Write result to a temp file
    filename = text + ".png" 
    with open( "letter/" + filename, "wb") as s:
        i.save(s, "PNG")
    return  "letter/" + filename

#for i in range(ord("A"),ord("Z")+1):
#    text2png(chr(i))
for i in range(ord("a"),ord("z")+1):
    text2png(chr(i))
