import tkinter as tk
import random

class PicturePasswordApp:
    def __init__(self, master):
        self.master = master
        self.master.title("Picture Password")
        self.password = [1, 2, 3, 4]  # Replace with your actual password
        self.current_order = self.password.copy()
        random.shuffle(self.current_order)

        self.canvas = tk.Canvas(self.master, width=400, height=200)
        self.canvas.pack()

        self.instruction_label = tk.Label(self.master, text="Click on pictures in the correct order.")
        self.instruction_label.pack()

        self.canvas.bind("<Button-1>", self.picture_clicked)

    def picture_clicked(self, event):
        clicked_picture = self.current_order.pop(0)
        if clicked_picture == self.password[0]:
            self.password.pop(0)
            if not self.password:
                self.instruction_label.config(text="Password correct!")
                self.reset_password()
        else:
            self.instruction_label.config(text="Incorrect password. Try again.")
            self.reset_password()

    def reset_password(self):
        self.password = [1, 2, 3, 4]  # Replace with your actual password
        self.current_order = self.password.copy()
        random.shuffle(self.current_order)
        self.instruction_label.after(2000, lambda: self.instruction_label.config(text="Click on pictures in the correct order."))


if __name__ == "__main__":
    root = tk.Tk()
    app = PicturePasswordApp(root)
    root.mainloop()
