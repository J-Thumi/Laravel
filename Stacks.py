import tkinter as tk
import random

class CandyDispenser:
    def __init__(self, root):  # Corrected constructor name
        self.candy_height = 45  # Height of each candy
        self.candy_width = 400   # Width of each candy to fit snugly
        self.max_candies = 10    # Capacity of the dispenser
        self.candies = []         # List to store candy objects (coordinates) on canvas
        self.spring = None        # Placeholder for the zigzag spring

        # Define heights
        self.min_spring_height = 80  # Minimum height when the dispenser is full (compressed)
        self.candy_spacing = 0        # Space between candies
        self.canvas_height = (self.candy_height + self.candy_spacing) * self.max_candies + self.min_spring_height + 65  # 65 for margins
        self.canvas_width = self.candy_width + 20  # Adjusted width of the dispenser to fit candies without extra space

        # Create a canvas to represent the candy dispenser
        self.dispenser_canvas = tk.Canvas(root, width=self.canvas_width, height=self.canvas_height, bg="white")
        self.dispenser_canvas.grid(row=0, column=2, padx=20, pady=20)  # Dispenser in column 2

        # Draw the dispenser outline and initial spring
        self.draw_dispenser()
        self.draw_zigzag_spring()

        # Add initial candies pictorially (empty by default)
        self.add_initial_candies()

        # Placeholder label for status messages, positioned in the second row and centered
        self.status_label = tk.Label(root, text="", fg="black", font=("Helvetica", 12, "bold"))
        self.status_label.grid(row=1, column=0, columnspan=5, padx=20, sticky='n')  # Span across 5 columns

        # Create operation buttons vertically in the second row (row 2)
        self.pop_button = tk.Button(root, text="Pop Candy", command=self.pop_candy)
        self.pop_button.grid(row=2, column=0, padx=5, sticky='ew')

        self.push_button = tk.Button(root, text="Push Candy", command=self.push_candy)
        self.push_button.grid(row=2, column=1, padx=5, sticky='ew')

        self.is_empty_button = tk.Button(root, text="Is Empty?", command=self.is_empty)
        self.is_empty_button.grid(row=2, column=2, padx=5, sticky='ew')

        self.top_button = tk.Button(root, text="Top Candy", command=self.top_candy)
        self.top_button.grid(row=2, column=3, padx=5, sticky='ew')

        self.len_button = tk.Button(root, text="Length", command=self.length)
        self.len_button.grid(row=2, column=4, padx=5, sticky='ew')

        # Configure grid weights for centering
        root.grid_columnconfigure(0, weight=1)
        root.grid_columnconfigure(1, weight=1)
        root.grid_columnconfigure(2, weight=1)
        root.grid_columnconfigure(3, weight=1)
        root.grid_columnconfigure(4, weight=1)
        root.grid_rowconfigure(0, weight=1)

        # Center the label in its row
        root.grid_rowconfigure(1, weight=1)  # Allow row 1 to expand for vertical centering

    def draw_dispenser(self):
        """Draw the dispenser outline on the canvas."""
        self.dispenser_canvas.create_rectangle(10, 50, self.canvas_width - 10, self.canvas_height - 50, outline="black", width=2)

    def draw_zigzag_spring(self):
        """Draw the full-length zigzag spring inside the dispenser."""
        self.update_zigzag_spring()

    def update_zigzag_spring(self):
        """Update the zigzag spring length based on the number of candies."""
        if self.spring is not None:
            self.dispenser_canvas.delete(self.spring)  # Clear the previous spring

        # Create a zigzag pattern for the spring
        zigzag_lines = []
        zigzag_step = 10  # Distance between zigzag points
        x_center = self.canvas_width / 2  # Middle of the dispenser
        y_top = self.canvas_height - 50  # Top of the spring
        remaining_candies = len([candy for candy in self.candies if candy is not None])

        # Calculate spring height based on the number of candies
        spring_height = self.min_spring_height + (self.canvas_height - 100 - self.min_spring_height) * (self.max_candies - remaining_candies) / self.max_candies
        y_bottom = y_top - spring_height  # Bottom position of the spring

        # Generate the zigzag points for the spring
        for i in range(int(spring_height // zigzag_step)):
            x = x_center - 10 if i % 2 == 0 else x_center + 10
            y = y_top - i * zigzag_step
            zigzag_lines.extend([x, y])

        # Close the spring shape by going to the bottom of the dispenser
        zigzag_lines.append(x_center + 10)
        zigzag_lines.append(y_bottom)
        zigzag_lines.append(x_center - 10)
        zigzag_lines.append(y_bottom)

        self.spring = self.dispenser_canvas.create_line(*zigzag_lines, fill="gray", width=2)

        # Update candy positions to sit on top of the spring
        self.update_candy_positions(y_bottom)

    def update_candy_positions(self, spring_top):
        """Update candy positions so they sit on the spring."""
        for i, candy in enumerate(self.candies):
            if candy is not None:
                # Calculate the new position of the candy based on the spring's top position
                x0 = 10  # Adjusted left position of the candy to fit snugly
                y0 = spring_top - (i * (self.candy_height + self.candy_spacing))
                x1 = x0 + self.candy_width
                y1 = y0 + self.candy_height

                # Update oval position
                self.dispenser_canvas.coords(candy[0], x0, y0, x1, y1)  # Update candy oval position
                self.dispenser_canvas.coords(candy[1], x0 + self.candy_width // 2, y0 + self.candy_height // 2)  # Center number on candy

    def add_initial_candies(self):
        """Initially empty dispenser, no candies drawn."""
        for _ in range(self.max_candies):
            self.candies.append(None)

    def pop_candy(self):
        """Simulate popping the top candy from the dispenser."""
        if any(self.candies):
            for i in range(self.max_candies - 1, -1, -1):
                if self.candies[i] is not None:
                    self.dispenser_canvas.delete(self.candies[i][0])  # Remove the candy oval
                    self.dispenser_canvas.delete(self.candies[i][1])  # Remove the candy number
                    self.candies[i] = None  # Mark the candy as removed
                    self.update_zigzag_spring()  # Update the spring and candy positions
                    self.status_label.config(text=f"Popped candy number {i + 1}.")
                    break
        else:
            self.status_label.config(text="No candies to pop!")

    def push_candy(self):
        """Simulate pushing a new candy onto the dispenser with a random color."""
        if None in self.candies:
            for i in range(self.max_candies):

                if self.candies[i] is None:
                    # Generate a random color for the candy
                    color = "#{:06x}".format(random.randint(0, 0xFFFFFF))  # Random hex color
                    # Position new candy at the next empty slot (bottom-most available)
                    x0 = 10  # Adjusted left position of the candy

                    y0 = self.canvas_height - 70 - (i * (self.candy_height + self.candy_spacing))
                    x1 = x0 + self.candy_width
                    y1 = y0 + self.candy_height

                    # Create an oval instead of a rectangle
                    candy_oval = self.dispenser_canvas.create_oval(x0, y0, x1, y1, fill=color, outline="")
                    candy_number = self.dispenser_canvas.create_text(x0 + self.candy_width // 2, y0 + self.candy_height // 2, text=str(i + 1), fill="white")
                    self.candies[i] = (candy_oval, candy_number)  # Store the candy object and its number
                    self.update_zigzag_spring()  # Update the spring and candy positions
                    self.status_label.config(text="Pushed a new candy into the dispenser.")
                    break
        else:
            self.status_label.config(text="Dispenser is full! Can't push more candies.")

    def is_empty(self):
        """Check if the dispenser is empty."""
        empty_status = all(candy is None for candy in self.candies)
        self.status_label.config(text="The dispenser is empty." if empty_status else "The dispenser has candies.")

    def top_candy(self):
        """Display the top candy number."""
        for i in range(self.max_candies - 1, -1, -1):
            if self.candies[i] is not None:
                self.status_label.config(text=f"Top candy number: {i + 1}")
                return
        self.status_label.config(text="No candies in the dispenser.")

    def length(self):
        """Display the number of candies in the dispenser."""
        num_candies = sum(candy is not None for candy in self.candies)
        self.status_label.config(text=f"Number of candies in dispenser: {num_candies}")

# Create the main window
if __name__ == "__main__":
    root = tk.Tk()
    root.title("Candy Dispenser")
    dispenser = CandyDispenser(root)
    root.mainloop()
