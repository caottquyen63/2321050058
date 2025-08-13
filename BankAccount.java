public class BankAccount {
    private String accountNumber;
    private String accountHolder;
    private double balance;

    public BankAccount(String accountNumber, String accountHolder, double balance) {
        if (accountNumber == null || accountNumber.trim().isEmpty()) {
            throw new IllegalArgumentException("Số tài khoản không được để trống.");
        }
        if (accountHolder == null || accountHolder.trim().isEmpty()) {
            throw new IllegalArgumentException("Tên chủ tài khoản không được để trống.");
        }
        if (balance < 0) {
            throw new IllegalArgumentException("Số dư ban đầu không được âm.");
        }

        this.accountNumber = accountNumber;
        this.accountHolder = accountHolder;
        this.balance = balance;
    }

    public void deposit(double amount) {
        if (amount <= 0) {
            throw new IllegalArgumentException("Số tiền nạp phải lớn hơn 0.");
        }
        balance += amount;
        System.out.println("Đã nạp " + amount + " vào tài khoản.");
    }

    public void withdraw(double amount) {
        if (amount <= 0) {
            throw new IllegalArgumentException("Số tiền rút phải lớn hơn 0.");
        }
        if (amount > balance) {
            throw new IllegalArgumentException("Số dư không đủ để rút số tiền này.");
        }
        balance -= amount;
        System.out.println("Đã rút " + amount + " khỏi tài khoản.");
    }

    public double getBalance() {
        return balance;
    }

    public String getAccountInfo() {
        return String.format("Số tài khoản: %s, Chủ tài khoản: %s, Số dư: %.2f",
                accountNumber, accountHolder, balance);
    }
}
