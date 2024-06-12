from PIL import Image
import os

def resize_image_to_template(input_image_path, template_image_path, output_image_path):
    try:
        # Open the template image to get its dimensions
        template_image = Image.open(template_image_path)
        template_width, template_height = template_image.size

        # Open the input image
        input_image = Image.open(input_image_path)
        
        # Resize the input image to match the template dimensions
        resized_image = input_image.resize((template_width, template_height), Image.ANTIALIAS)

        # Save the resized image to the output path
        resized_image.save(output_image_path)

        print(f"Image resized to {template_width}x{template_height} and saved to {output_image_path}")

    except Exception as e:
        print(f"An error occurred: {e}")

# Define paths
input_image_path = './best-phones.jpg'
products_folder_path = 'product'
output_folder_path = './out'

# Ensure the output directory exists
os.makedirs(output_folder_path, exist_ok=True)

# Process all template images in the products folder
for i, template_file in enumerate(sorted(os.listdir(products_folder_path))):
    template_image_path = os.path.join(products_folder_path, template_file)
    output_image_path = os.path.join(output_folder_path, template_file)

    resize_image_to_template(input_image_path, template_image_path, output_image_path)
