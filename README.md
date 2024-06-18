- name: Debug SSH connection
  run: |
    ssh -vvv -o StrictHostKeyChecking=no ${{ secrets.SSH_USER }}@${{ secrets.SSH_HOST }} 'echo "SSH connection successful"'

