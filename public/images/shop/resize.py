from PIL import Image
image = Image.open('26.jpg')
new = image.resize((1000,1000))
#print('new',new.size)
new.save('26.jpg')
new.show()
