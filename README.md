 - name: Debug SSH connection
        run: |
          echo "Testing SSH connection to ${secrets.SERVER_USERNAME}@${secrets.SERVER_HOST}:${secrets.SERVER_PORT}"
          ssh -o StrictHostKeyChecking=no -v ${{ secrets.SERVER_USERNAME }}@${{ secrets.SERVER_HOST }} -p ${{ secrets.SERVER_PORT }} 'echo "SSH connection successful"'
