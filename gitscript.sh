# Remove the existing remote origin
sudo git remote remove origin

# Re-add the remote origin
sudo git remote add origin https://github.com/ahmedgfathy/inven.git

# Create an initial commit if there are no commits yet
sudo git add .
sudo git commit -m "Initial commit"

# Rename the branch to main
sudo git branch -M main

# Push the changes to the remote repository
sudo git push -u origin main
