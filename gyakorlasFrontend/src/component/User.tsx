import type { UserType } from "../types/userType";

interface UsersProps {
  user: UserType;
}

function User({ user }: UsersProps) {
  return (
    <tr>
      <td>{user.id}</td>
      <td>{user.name}</td>
      <td>{user.email}</td>
    </tr>
  );
}

export default User;