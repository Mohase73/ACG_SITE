from PIL import Image
image = Image.open('bureau.jpg')
new = image.resize((1920,1280))
#print('new',new.size)
new.save('bureau.jpg')
new.show()
