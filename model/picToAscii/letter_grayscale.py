import Image,os,sys

def getgrayscale(filename):
	img = Image.open(filename)
	width = img.size[0]
	height = img.size[1]
	all_gs = 0
	
	for i in range(width):
		for j in range(height):
			r,g,b = img.getpixel((i,j))
			gs = float(r+g+b)/3
			all_gs = all_gs + gs
	av_gs = all_gs/((i+1)*(j+1))
	
	return av_gs

def getgraydic():
	list = os.listdir("letter/")
	gray_dic = {}
	for line in list:
		gray_dic[line] = getgrayscale("letter/"+line)
	return gray_dic

#dic = getgraydic()
#for key in dic.keys():
#	print key , dic[key]
