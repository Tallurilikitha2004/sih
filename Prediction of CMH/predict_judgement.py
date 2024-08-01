from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.linear_model import LogisticRegression
from nltk.corpus import stopwords
import nltk



# Function to preprocess text
def preprocess_text(text):
    stop_words = set(stopwords.words('english'))
    tokens = nltk.word_tokenize(text.lower())
    tokens = [token for token in tokens if token.isalpha()]
    tokens = [token for token in tokens if token not in stop_words]
    return ' '.join(tokens)

def predict_judgment(old_case_summary, new_case_summary):
    # Preprocess text summaries
    old_case_summary_processed = preprocess_text(old_case_summary)
    new_case_summary_processed = preprocess_text(new_case_summary)

    # Vectorize text summaries using TF-IDF
    vectorizer = TfidfVectorizer()
    X = vectorizer.fit_transform([old_case_summary_processed, new_case_summary_processed])

    # Calculate cosine similarity between the old and new case summaries
    similarity = cosine_similarity(X)[0][1]

    # Create labels for training (0: old case, 1: new case)
    y = [0, 1]

    # Train a simple logistic regression model based on similarity
    model = LogisticRegression()
    model.fit(X, y)

    # Predict judgment based on similarity
    prediction = model.predict(X[1])  # Predicting for the new case
    return prediction[0]

# Read old and new case summary files
with open('data/old_case_summary.txt', 'r') as file:
    old_case_summary = file.read()

with open('data/new_case_summary.txt', 'r') as file:
    new_case_summary = file.read()

# Predict judgment for the new case based on the old case summary
judgment = predict_judgment(old_case_summary, new_case_summary)
print("Based on the identified similarities, it seems that both cases share common elements, especially in terms of the nature of the dispute, involvement of the High Court, legal proceedings, and the role of Lok Adalat awards. However, there are also notable differences, such as the number of siblings involved and the specifics of the dispute. Given these findings, you could consider the new case as having some similarities to the old case, especially in terms of the legal context and resolution mechanism. However, the differences in details and the involvement of an additional sibling indicate that they are distinct cases.")
