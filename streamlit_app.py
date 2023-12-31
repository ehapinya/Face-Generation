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
age = st.selectbox("Select Age (years)", ["Default", "15", "45", "75"])
expression = st.selectbox("Select Expression", ["Default", "Neutral", "Smile", "Shock"])

# # Button to trigger image generation
if st.button("Run"):
    # Display the image based on the selected variables
    display_image(haircolor, age, expression)
    
st.text("\n\n\n"+"-"*100+"\n\n\n")
st.text("@InProceedings{Shoshan_2021_ICCV,\n    author    = {Shoshan, Alon and Bhonker, Nadav and Kviatkovsky, Igor and Medioni, G\'erard},\n    title     = {GAN-Control: Explicitly Controllable GANs},\n    booktitle = {Proceedings of the IEEE/CVF International Conference on Computer Vision (ICCV)},\n    month     = {October},\n    year      = {2021},}")
st.text("Designed and Implemented by Deep Learning Gang\n\tMs. Apinya Sriyota\t\t6322771534\n\tMr. Thanakit Mettarikanon\t6322772045\n\tMs. Isariya Kerdkla\t\t6322773092\n\tMr. Chanawong Karoon-ngampun\t6322774025")
st.text("This Project is part of CSS485 Deep Learning, academic year 2023/1")
