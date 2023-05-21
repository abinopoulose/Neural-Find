import tensorflow as tf  
import cv2
from tensorflow.keras.models import load_model
import tensorflow_hub as hub
import os

# load model
path = r"final.h6"
photo =r"test.jpg"
model = load_model(path)



# analysis
import numpy as np
from tensorflow import keras

img = cv2.imread(photo)
img_2 = cv2.resize(img,(224,224))
img2 = np.array(img_2)

# img_2 = img_2/255

img_2 = tf.expand_dims(img_2, 0)

# predictions
predicted = model.predict([img_2])
predicted = np.argmax(predicted, axis=1)
result = predicted[0]

if result == 0:
	print("0")
elif result == 1:
	print("1")
elif result == 2:
	print("2")
else: 
	print("3")