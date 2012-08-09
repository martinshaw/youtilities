echo "Packing git commit and push!!!"
git add *
echo "Enter commit comment:"
read commentGit
git commit -m "git push via script: $commentGit"
git push --repo git://github.com/martinshaw/youtilities.git
