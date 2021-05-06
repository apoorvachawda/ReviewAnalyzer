from textblob import TextBlob
from sklearn.preprocessing import MinMaxScaler

contents = ""
rounded = []
i = 1.0

while(i <= 5.0):
	rounded.append(i)
	i += 0.25

def retriveText():
	file = open("userReview.txt", "r")
	contents = file.read()
	if (not contents):
		print("No reviews found.")
	else:
		print("Reviews fetched successfully.")
		print(contents)
		return contents

def calcPolarity():
	contents = retriveText()
	edu = TextBlob(contents)
	mypred = edu.sentiment.polarity
	return mypred

def calcRound(lst, K):
	return lst[min(range(len(lst)), key = lambda i: abs(lst[i]-K))]


def normalizePolarity(value):
	print("value = ", value)
	rating = ((value + 1 ) * 5) / 2
	rating = float(format(rating, ".2f"))
	rating = calcRound(rounded, rating)
	print(rating)
	return rating

polarity = calcPolarity()
normalizePolarity(polarity)
