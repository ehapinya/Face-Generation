import streamlit as st

# Define function to load and display image based on selected variables
def display_image(haircolor, age, expression):
    # Replace this with your logic to generate the image URL based on the variables
    caption = "Hair Color: "+haircolor+" | Age: "+age+" | Expression: "+expression 
    image_url = "img/"+haircolor+"_"+age+"_"+expression+".png"
    st.image(image_url, caption=caption, use_column_width=True)

# Streamlit app layout
st.title("Face Generator using GAN-Control")
# Dropdowns for variable selection
haircolor = st.selectbox("Select Hair Color", ["Default", "Blond", "Red", "Black"])
age = st.selectbox("Select Age (years)", ["Default", "15", "45", 75"])
expression = st.selectbox("Select Expression", ["Default", "Neutral", "Smile", "Shock"])

# # Button to trigger image generation
if st.button("Run"):
    # Display the image based on the selected variables
    display_image(haircolor, age, expression)
