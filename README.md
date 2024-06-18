ssh -o StrictHostKeyChecking=no -o PasswordAuthentication=yes ${{ secrets.SSH_USER }}@${{ secrets.SSH_HOST }} 'echo "SSH connection successful"'
