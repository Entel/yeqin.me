import os
import sys 
import Image
import letter_grayscale 

def getsize(img):
	o_width = img.size[0]
	o_height = img.size[1]
	t_width = 500
	t_height = (o_height*t_width)/o_width
	return (t_width, t_height)

def outsize(img):
	(o_width, o_height) = getsize(img)
	t_size = (22*o_width, 22*o_height)
	return t_size

#get a dictionary of the letter's grayscale
dic = letter_grayscale.getgraydic()

def approximation(i):
	
	tmp = 256
	loc_key = ""
	for key in dic.keys():
		j = i - dic[key]
		if tmp > abs(j):
			tmp = abs(j)	
			loc_key = key
	return loc_key
	
def pic2ascii(filename):
	img = Image.open(filename)
	img = img.resize(getsize(img))
	outimg = Image.new("RGB",outsize(img),"#FFFFFF")
	(width, height) = getsize(img)

	for i in range(width):
		for j in range(height):
			r,g,b = img.getpixel((i,j))
			gs = float(r+g+b)/3
			box = (i*22, j*22, (i+1)*22, (j+1)*22)
			outimg.paste(Image.open("letter/"+approximation(gs)),box)

	outimg.save(filename+"out.png","PNG")
	return outimg

#filename = input("please in put the path of a picture:")
pic2ascii("3.jpg")
